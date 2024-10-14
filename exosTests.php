<?php
require_once _ROOTPATH_ . '/templates/head.php';
require_once _ROOTPATH_ . '/templates/header.php';

// Détails de connexion à la base de données
$host = 'localhost';
$dbname = 'your_database_name';
$username = 'your_database_user';
$password = 'your_database_password';

// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer et assainir les entrées de l'utilisateur
    $name = htmlspecialchars(trim($_POST['name']));
    $prenom = htmlspecialchars(trim($_POST['prenom']));
    $adresse = htmlspecialchars(trim($_POST['adresse']));
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $telephone = htmlspecialchars(trim($_POST['telephone']));
    $password = $_POST['password'];
    $passwordConfirm = $_POST['passwordConfirm'];

    // Valider les données du formulaire
    $errors = [];
    if ($password !== $passwordConfirm) {
        $errors[] = "Les mots de passe ne correspondent pas.";
    }

    // Si aucune erreur, procéder à l'enregistrement de l'utilisateur
    if (empty($errors)) {
        // Hacher le mot de passe pour la sécurité
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        try {
            // Se connecter à la base de données
            $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Préparer et exécuter l'instruction d'insertion
            $stmt = $pdo->prepare("INSERT INTO users (name, prenom, adresse, email, telephone, password) VALUES (:name, :prenom, :adresse, :email, :telephone, :password)");
            $stmt->execute([
                ':name' => $name,
                ':prenom' => $prenom,
                ':adresse' => $adresse,
                ':email' => $email,
                ':telephone' => $telephone,
                ':password' => $hashedPassword
            ]);

            // Message de succès
            echo "<div class='alert alert-success text-center'>Compte créé avec succès.</div>";

        } catch (PDOException $e) {
            if ($e->getCode() == 23000) {
                $errors[] = "Un compte avec cet email existe déjà.";
            } else {
                $errors[] = "Erreur de connexion à la base de données : " . $e->getMessage();
            }
        }
    }

    // Afficher les erreurs
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<div class='alert alert-danger text-center'>$error</div>";
        }
    }
}
?>

<main class="container mx-5">
    <form class="mx-4 p-4" method="POST" action="">
        <h1 class="text-center">Créer mon compte</h1>
        <div class="mb-3 text-center">
            <label for="name" class="form-label">Nom</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3 text-center">
            <label for="prenom" class="form-label">Prénom</label>
            <input type="text" class="form-control" id="prenom" name="prenom" required>
        </div>
        <div class="mb-3 text-center">
            <label for="adresse" class="form-label">Adresse</label>
            <input type="text" class="form-control" id="adresse" name="adresse" required>
        </div>
        <div class="mb-3 text-center">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3 text-center">
            <label for="telephone" class="form-label">Téléphone</label>
            <input type="tel" class="form-control" id="telephone" name="telephone" required pattern="^(\+33|0)[1-9](\d{2}){4}$" title="Format: +33 ou 0 suivi de 9 chiffres">
        </div>
        <div class="mb-3 text-center">
            <label for="password" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" id="password" name="password" required minlength="8">
        </div>
        <div class="mb-3 text-center">
            <label for="passwordConfirm" class="form-label">Confirmer mot de passe</label>
            <input type="password" class="form-control" id="passwordConfirm" name="passwordConfirm" required minlength="8">
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-dark">Valider</button>
        </div>
    </form>
</main>

<?php
require_once _ROOTPATH_ . '/templates/footer.php';
?>