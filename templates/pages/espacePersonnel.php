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

<form class="container-fluid p-4 bg-secondary my-4">
    <h1 class="text-center">Mes informations personnelles</h1>
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
        <label for="password" class="form-label">Modifier mot de passe</label>
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

<?php

require_once _ROOTPATH_ . '\templates\footer.php';

?>