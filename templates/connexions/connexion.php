<?php



require_once _ROOTPATH_ . '\templates\head.php';


?>


<div class="container-fluid px-5 mt-4 row d-flex justify-content-center">
    <h1 class="text-center pb-2">Connexion</h1>
    <a href="../index.php" class="text-center">
        <img src="..\assets\images\Logo GameStore-2.png" alt="Logo GameStore" class="pb-4" width="400">
    </a>

    <?php foreach ($error as $errors) { ?>
        <div class="alert alert-danger" role="alert">
            <?= $errors; ?>
        </div>
    <?php } ?>

    <form method="POST" class="col-sm-6 mb-3 mx-auto justify-content-center">
        <div class="mb-2 text-center">
            <label for="mail" class="form-label text-white">Adresse mail</label>
            <input type="email" class="form-control" id="mail" aria-describedby="emailHelp" name="mail">
            <div id="emailHelp" class="form-text">Nous ne partagerons jamais votre e-mail avec quelqu'un d'autre.</div>
        </div>
        <div class="mb-2 text-center">
            <label for="password" class="form-label text-white">Mot de passe</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>

        <div class="d-flex justify-content-center p-2">
            <button type="submit" class="btn btn-warning mb-2" name="connexion">Connexion</button>
        </div>

        <div>
            <div class="text-center">
                <button class="mb-3 btn btn-dark text-center">
                    <a href="index.php?controller=connexions&action=mdpOublie" class="text-white">Mot de passe oublié</a>
                </button>
            </div>

            <div class="text-center">
                <button class="mb-3 btn btn-dark text-center">
                    <a href="index.php?controller=pages&action=creationCompte" class="text-white">Créer un compte</a>
                </button>
            </div>
        </div>
    </form>
</div>