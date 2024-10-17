<?php

require_once _ROOTPATH_ . '\templates\head.php';
require_once _ROOTPATH_ . '\templates\header.php';



?>

<main class="container mx-5">
<form class="m-5 p-4 text-white" method="POST" action="">
    <h1 class="text-center pb-4">Créer mon compte</h1>
    <div class="mb-3 text-center">
        <label for="last_name" class="form-label">Nom</label>
        <input type="text" class="form-control" id="last_name" name="last_name" required>
    </div>
    <div class="mb-3 text-center">
        <label for="first_name" class="form-label">Prénom</label>
        <input type="text" class="form-control" id="first_name" name="first_name" required>
    </div>
    <div class="mb-3 text-center">
        <label for="adresse" class="form-label">Adresse</label>
        <input type="text" class="form-control" id="adresse" name="adresse" required>
    </div>
    <div class="mb-3 text-center">
        <label for="zip_code" class="form-label">Code Postale</label>
        <input type="text" pattern="[0-9, A-B]{5}" class="form-control" id="zip_code" name="zip_code" maxlength="5" required>
    </div>
    <div class="mb-3 text-center">
        <label for="city" class="form-label">Ville</label>
        <input type="text" class="form-control" id="city" name="city" required>
    </div>
    <div class="mb-3 text-center">
        <label for="mail" class="form-label">Email</label>
        <input type="email" class="form-control" id="mail" name="mail" required>
    </div>
    <div class="mb-3 text-center">
        <label for="password" class="form-label">Mot de passe</label>
        <input type="password" class="form-control" id="password" name="password" required minlength="12">
    </div>
    <div class="mb-3 text-center">
        <label for="passwordConfirm" class="form-label">Confirmer mot de passe</label>
        <input type="password" class="form-control" id="passwordConfirm" name="passwordConfirm" required minlength="12">
    </div>

    <div class="text-center">
        <button type="submit" class="btn btn-warning m-4">Valider</button>
    </div>

</form>
</main>

<?php

require_once _ROOTPATH_ . '\templates\footer.php';

?>