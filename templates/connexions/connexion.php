<?php

require_once _ROOTPATH_.'\templates\head.php';

?>

<div class="container-fluid px-5 mt-5">
    <a href="../index.php">
        <img src="../Images/Logo GameStore-2.png" alt="Logo GameStore" class="align-text-center w-100 pb-4">
    </a>
    <form>
        <div class="mb-3 text-center">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3 text-center">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password">
        </div>

        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-dark mb-4">Connexion</button>
        </div>

        <div>
            <div class="text-center">
            <button class="mb-3 text-center">
            <a href="index.php?controller=connexions&action=mdpOublie">Mot de passe oublié</a>
            </button>
            </div>
            
            <div class="text-center">
            <button class="mb-3 text-center">
            <a href="index.php?controller=pages&action=creationCompte">Créer un compte</a>
            </button>
            </div>
        </div>
        
        
    </form>
</div>