<?php

require_once _ROOTPATH_ . '\templates\head.php';
require_once _ROOTPATH_ . '\templates\header.php';



?>

<main class="container mx-5">
<form class="mx-4 p-4" method="POST" action="">
    <h1 class="text-center">Créer mon compte</h1>
    <div class="mb-3 text-center">
        <label for="name" class="form-label">Nom</label>
        <input type="text" class="form-control" id="name">
    </div>
    <div class="mb-3 text-center">
        <label for="prenom" class="form-label">Prénom</label>
        <input type="text" class="form-control" id="prenom">
    </div>
    <div class="mb-3 text-center">
        <label for="adresse" class="form-label">Adresse</label>
        <input type="text" class="form-control" id="adresse">
    </div>
    <div class="mb-3 text-center">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email">
    </div>
    <div class="mb-3 text-center">
        <label for="telephone" class="form-label">Téléphone</label>
        <input type="phone" class="form-control" id="telephone">
    </div>
    <div class="mb-3 text-center">
        <label for="password" class="form-label">Mot de passe</label>
        <input type="password" class="form-control" id="password">
    </div>
    <div class="mb-3 text-center">
        <label for="passwordConfirm" class="form-label">Confirmer mot de passe</label>
        <input type="password" class="form-control" id="passwordConfirm">
    </div>

    <div class="text-center">
        <button type="submit" class="btn btn-dark">Valider</button>
    </div>

</form>
</main>

<?php

require_once _ROOTPATH_ . '\templates\footer.php';

?>