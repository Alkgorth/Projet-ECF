<?php

require_once _ROOTPATH_ . '\templates\head.php';
require_once _ROOTPATH_ . '\templates\header.php';


?>
<div class="container d-flex justify-content-center my-4">
  <table class="table w-50 text-center">
    <thead>
      <tr>
        <th scope="col">Produits</th>
        <th scope="col">État</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">Assassin's Creed Vahlalla</th>
        <td>En attente</td>
      </tr>
      <tr>
        <th scope="row">Fallout New Vegas</th>
        <td>Livré</td>
      </tr>
      <tr>
        <th scope="row">Dark Soul's 3</th>
        <td>Livré</td>
      </tr>
    </tbody>
  </table>
</div>

<main class="container mx-5">
  <form class="m-5 p-4 text-white" method="POST" action="index.php?controller=pages&action=espacePersonnel">

    <?php if (empty($error) && isset($_POST['saveUser'])) { ?>
      <div class="alert alert-primary" role="alert">
        <?= $affichage; ?>
      </div>
    <?php } ?>

    <?php foreach ($error as $errors) { ?>
      <div class="alert alert-danger" role="alert">
        <?= $errors; ?>
      </div>
    <?php } ?>

    <h1 class="text-center pb-4">Espace personnel</h1>
    <div class="mb-3 text-center">
      <label for="last_name" class="form-label">Nom</label>
      <input type="text" class="form-control" id="last_name" name="last_name" value="<?= htmlspecialchars($_SESSION['user']['last_name']) ?>">

    </div>
    <div class="mb-3 text-center">
      <label for="first_name" class="form-label">Prénom</label>
      <input type="text" class="form-control" id="first_name" name="first_name" value="<?= htmlspecialchars($_SESSION['user']['first_name']) ?>">

    </div>
    <div class="mb-3 text-center">
      <label for="adresse" class="form-label">Adresse</label>
      <input type="text" class="form-control" id="adresse" name="adresse" value="<?= htmlspecialchars($_SESSION['user']['adresse']) ?>">

    </div>
    <div class="mb-3 text-center">
      <label for="zip_code" class="form-label">Code Postale</label>
      <input type="text" pattern="[0-9, A-B]{5}" class="form-control" id="zip_code" name="zip_code" maxlength="5" value="<?= htmlspecialchars($_SESSION['user']['zip_code']) ?>">

    </div>
    <div class="mb-3 text-center">
      <label for="city" class="form-label">Ville</label>
      <input type="text" class="form-control" id="city" name="city" value="<?= htmlspecialchars($_SESSION['user']['city']) ?>">

    </div>
    <div class="mb-3 text-center">
      <label for="mail" class="form-label">Email</label>
      <input type="email" class="form-control" id="mail" name="mail" value="<?= htmlspecialchars($_SESSION['user']['mail']) ?>">

    </div>
    <div class="mb-3 text-center">
      <label for="password" class="form-label">Mot de passe</label>
      <input type="password" class="form-control" id="password" name="password" required minlength="12">

    </div>

    <div class="mb-3 text-center">
      <label for="passwordConfirm" class="form-label">Confirmer mot de passe</label>
      <input type="password" class="form-control" id="passwordConfirm" name="passwordConfirm" required minlength="12">
    </div>
    <div class="mb-3 text-center">
      <label for="fk_id_store" class="form-label">Magasin</label>
      <select class="form-select" id="fk_id_store" name="fk_id_store">
        <option value="1" <?= (isset($_SESSION['user']['fk_id_store']) && $_SESSION['user']['fk_id_store'] == 1) ? 'selected' : '' ?>>Lille</option>
        <option value="2" <?= (isset($_SESSION['user']['fk_id_store']) && $_SESSION['user']['fk_id_store'] == 2) ? 'selected' : '' ?>>Nantes</option>
        <option value="3" <?= (isset($_SESSION['user']['fk_id_store']) && $_SESSION['user']['fk_id_store'] == 3) ? 'selected' : '' ?>>Bordeaux</option>
        <option value="4" <?= (isset($_SESSION['user']['fk_id_store']) && $_SESSION['user']['fk_id_store'] == 4) ? 'selected' : '' ?>>Toulouse</option>
        <option value="5" <?= (isset($_SESSION['user']['fk_id_store']) && $_SESSION['user']['fk_id_store'] == 5) ? 'selected' : '' ?>>Paris</option>
      </select>

      <div class="text-center">
        <button type="submit" name="saveUser" class="btn btn-warning m-4">Valider</button>
      </div>
      <div class="text-center">
        <button type="submit" name="delete" class="btn btn-dark m-4">Supprimer mon compte</button>
      </div>

  </form>
</main>
<?php



require_once _ROOTPATH_ . '\templates\footer.php';

?>