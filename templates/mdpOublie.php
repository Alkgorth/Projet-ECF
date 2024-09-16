<?php

require_once 'head.php';


?>

<div class="container-fluid px-5 mt-5">
    <a href="index.html">
        <img src="../Images/Logo GameStore-2.png" alt="Logo GameStore" class="align-text-center w-100 pb-4">
    </a>
    <form>
        <div class="mb-3 text-center">
            <label for="email" class="form-label pb-2">Demande de réinitialisation de mot de passe</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
        </div>
        
        <div class="d-flex justify-content-center p-4">
            <button type="submit" class="btn btn-dark">Envoyer</button>
        </div>
        <button>
        <a href="connexion.php">Annuler</a>
        </button>
    
    </form>
</div>