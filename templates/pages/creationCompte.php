<?php

require_once _ROOTPATH_ . '\templates\head.php';
require_once _ROOTPATH_ . '\templates\header.php';



?>

<main class="container mx-5">
<form class="m-5 p-4 text-white" method="POST">
    <h1 class="text-center pb-4">Créer mon compte</h1>
    <div class="mb-3 text-center">
        <label for="last_name" class="form-label">Nom</label>
        <input type="text" class="form-control <?=(isset($errors['last_name']) ? 'is-invalid': '') ?>" id="last_name" name="last_name" required>
        <?php if(isset($errors['last_name'])) { ?>
            <div class="invalid-feedback"><?=$errors['last_name'] ?></div>
        <?php } ?>
    </div>
    <div class="mb-3 text-center">
        <label for="first_name" class="form-label">Prénom</label>
        <input type="text" class="form-control <?=(isset($errors['first_name']) ? 'is-invalid': '') ?>" id="first_name" name="first_name" required>
        <?php if(isset($errors['first_name'])) { ?>
            <div class="invalid-feedback"><?=$errors['first_name'] ?></div>
        <?php } ?>
    </div>
    <div class="mb-3 text-center">
        <label for="adresse" class="form-label">Adresse</label>
        <input type="text" class="form-control <?=(isset($errors['adresse']) ? 'is-invalid': '') ?>" id="adresse" name="adresse" required>
        <?php if(isset($errors['adresse'])) { ?>
            <div class="invalid-feedback"><?=$errors['adresse'] ?></div>
        <?php } ?>
    </div>
    <div class="mb-3 text-center">
        <label for="zip_code" class="form-label">Code Postale</label>
        <input type="text" pattern="[0-9, A-B]{5}" class="form-control <?=(isset($errors['zip_code']) ? 'is-invalid': '') ?>" id="zip_code" name="zip_code" maxlength="5" required>
        <?php if(isset($errors['zip_code'])) { ?>
            <div class="invalid-feedback"><?=$errors['zip_code'] ?></div>
        <?php } ?>
    </div>
    <div class="mb-3 text-center">
        <label for="city" class="form-label">Ville</label>
        <input type="text" class="form-control <?=(isset($errors['city']) ? 'is-invalid': '') ?>" id="city" name="city" required>
        <?php if(isset($errors['city'])) { ?>
            <div class="invalid-feedback"><?=$errors['city'] ?></div>
        <?php } ?>
    </div>
    <div class="mb-3 text-center">
        <label for="mail" class="form-label">Email</label>
        <input type="email" class="form-control <?=(isset($errors['mail']) ? 'is-invalid': '') ?>" id="mail" name="mail" required>
        <?php if(isset($errors['mail'])) { ?>
            <div class="invalid-feedback"><?=$errors['mail'] ?></div>
        <?php } ?>
    </div>
    <div class="mb-3 text-center">
        <label for="password" class="form-label">Mot de passe</label>
        <input type="password" class="form-control <?=(isset($errors['password']) ? 'is-invalid': '') ?>" id="password" name="password" required minlength="12">
        <?php if(isset($errors['password'])) { ?>
            <div class="invalid-feedback"><?=$errors['password'] ?></div>
        <?php } ?>
    </div>
    <div class="mb-3 text-center">
        <label for="passwordConfirm" class="form-label">Confirmer mot de passe</label>
        <input type="password" class="form-control <?=(isset($errors['passwordConfirm']) ? 'is-invalid': '') ?>" id="passwordConfirm" name="passwordConfirm" required minlength="12">
        <?php if(isset($errors['passwordConfirm'])) { ?>
            <div class="invalid-feedback"><?=$errors['passwordConfirm'] ?></div>
        <?php } ?>
    </div>
    <div class="mb-3 text-center">
        <label for="fk_id_store" class="form-label">Magasin</label>
        <select class="form-select" id="fk_id_store" name="fk_id_store" required>
            <option selected>Choisir...</option>
            <option value="1">Lille</option>
            <option value="2">Nantes</option>
            <option value="3">Bordeaux</option>
            <option value="4">Toulouse</option>
            <option value="5">Paris</option>
        </select>

    <div class="text-center">
        <button type="submit" name="saveUser" class="btn btn-warning m-4">Valider</button>
    </div>

</form>
</main>

<?php

require_once _ROOTPATH_ . '\templates\footer.php';


?>
