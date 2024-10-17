<?php

// indique où ce situe le fichier
namespace App\Repository;

use App\Db\Mysql;
use App\Entity\Game;
use App\Entity\User;

class UserCreaRepositoryTests extends MainRepository
{
    public function findOneById(int $id)
    {
        // requête qui récupère l'utilisateur
        $query = $this->pdo->prepare("SELECT * FROM app_user WHERE id = :id");
        $query->bindParam(':id', $id, $this->pdo::PARAM_STR);
        $query->execute();
        $user = $query->fetch($this->pdo::FETCH_ASSOC);
        if ($user) {
            return User::createAndHydrate($user);
        } else {
            return false;
        }
    }

    public function createUser()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
            if (!empty($_POST)) {
                if (
                    isset(
                        $_POST['last_name'],
                        $_POST['first_name'],
                        $_POST['adresse'],
                        $_POST['mail'],
                        $_POST['zip_code'],
                        $_POST['password'],
                        $_POST['passwordConfirm']
                    )
                    && !empty($_POST['last_name'])
                    && !empty($_POST['first_name'])
                    && !empty($_POST['adresse'])
                    && !empty($_POST['mail'])
                    && !empty($_POST['zip_code'])
                    && !empty($_POST['password'])
                    && !empty($_POST['passwordConfirm'])
                ) {
                    // Récupérer et assainir les entrées de l'utilisateur
                    $last_name = htmlspecialchars(trim($_POST['last_name']));
                    $first_name = htmlspecialchars(trim($_POST['first_name']));
                    $adresse = htmlspecialchars(trim($_POST['adresse']));
                    $mail = filter_var($_POST['mail'], FILTER_SANITIZE_EMAIL);
                    if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
                        $errors[] = "L'adresse email n'est pas valide.";
                    }
                    $zip_code = htmlspecialchars(trim($_POST['zip_code']));
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
                            // Préparer et exécuter l'instruction d'insertion
                            $query = $this->pdo->prepare("INSERT INTO app_user (last_name, first_name, mail, adresse, zip_code, password, role) 
                        VALUES (:name, :prenom, :adresse, :email, :code_postal, :password, '['\"USER\"']')");
                            $query->bindParam(':name', $last_name, $this->pdo::PARAM_STR);
                            $query->bindParam(':prenom', $first_name, $this->pdo::PARAM_STR);
                            $query->bindParam(':adresse', $adresse, $this->pdo::PARAM_STR);
                            $query->bindParam(':email', $_POST["mail"], $this->pdo::PARAM_STR);
                            $query->bindParam(':code_postal', $zip_code, $this->pdo::PARAM_STR);
                            $query->bindParam(':password', $hashedPassword, $this->pdo::PARAM_STR);

                            $query->execute([
                                ':name' => $last_name,
                                ':prenom' => $first_name,
                                ':adresse' => $adresse,
                                ':email' => $mail,
                                ':code_postal' => $zip_code,
                                ':password' => $hashedPassword
                            ]);

                            $user = $query->fetch($this->pdo::FETCH_ASSOC);
                            $user = new User();

                            // Message de succès
                            echo "<div class='alert alert-success text-center'>Compte créé avec succès.</div>";
                        } catch (\Exception $e) {
                            if ($e->getCode() == 23000) {
                                $errors[] = "Un compte avec cet email existe déjà.";
                            } else {
                                $errors[] = "Erreur de connexion à la base de données : " . $e->getMessage();
                            }
                        }
                    }
                }
            }
        }
        return $user;
    }

    public function findUser(string $mail)
    {
        $query = $this->pdo->prepare('SELECT * FROM user WHERE mail = :mail');

        $query->bindParam(':mail', $mail, $this->pdo::PARAM_STR);

        $query->execute();

        $user = $query->fetch($this->pdo::FETCH_ASSOC);

        return $user;
    }
}
