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
<form class="m-5 p-4 text-white" method="POST">
    <h1 class="text-center pb-4">Créer mon compte</h1>
    <div class="mb-3 text-center">
        <label for="last_name" class="form-label">Nom</label>
        <input type="text" class="form-control" id="last_name" name="last_name" autocomplete="<?php $user['last_name'] ?>">
        
    </div>
    <div class="mb-3 text-center">
        <label for="first_name" class="form-label">Prénom</label>
        <input type="text" class="form-control" id="first_name" name="first_name" autocomplete="<?php $user['last_name'] ?>">
        
    </div>
    <div class="mb-3 text-center">
        <label for="adresse" class="form-label">Adresse</label>
        <input type="text" class="form-control" id="adresse" name="adresse" autocomplete="<?php $user['last_name'] ?>">
        
    </div>
    <div class="mb-3 text-center">
        <label for="zip_code" class="form-label">Code Postale</label>
        <input type="text" pattern="[0-9, A-B]{5}" class="form-control" id="zip_code" name="zip_code" maxlength="5" autocomplete="<?php $user['last_name'] ?>">
       
    </div>
    <div class="mb-3 text-center">
        <label for="city" class="form-label">Ville</label>
        <input type="text" class="form-control" id="city" name="city" autocomplete="<?php $user['last_name'] ?>">
       
    </div>
    <div class="mb-3 text-center">
        <label for="mail" class="form-label">Email</label>
        <input type="email" class="form-control" id="mail" name="mail" autocomplete="<?php $user['last_name'] ?>">
      
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
        <select class="form-select" id="fk_id_store" name="fk_id_store" autocomplete="<?php $user['last_name'] ?>">
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

var_dump($_SESSION);

require_once _ROOTPATH_ . '\templates\footer.php';

?>