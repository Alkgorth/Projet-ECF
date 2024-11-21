<?php

require_once _ROOTPATH_ . '\templates\head.php';

?>

<body>
    <div class="container-fluid px-5 mt-5 row d-flex justify-content-center">
        <a href="../index.php" class="text-center">
            <img src="..\assets\images\Logo GameStore-2.png" alt="Logo GameStore" class="pb-4" width="400">
        </a>
        <form method="POST" class="col-sm-6 mb-3 mx-auto justify-content-center">
            <div class="mb-3 text-center">
                <label for="mail" class="form-label pb-2 text-white">Demande de réinitialisation de mot de passe</label>
                <input type="email" class="form-control <?= (isset($errors['mail']) ? 'is-invalid' : '') ?>" id="mail" aria-describedby="emailHelp" name="mail">
                <?php if (isset($errors['mail'])) { ?>
                    <div class="invalid-feedback"><?= $errors['mail'] ?></div>
                <?php } ?>
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                </div>

                <div class="d-flex justify-content-center p-4">
                    <button type="submit" class="btn btn-warning mb-4" name="resetPassword">
                            Envoyer
                    </button>
                </div>
                <button class="mb-3 btn btn-dark text-center">
                    <a href="index.php?controller=connexions&action=connexion" class="text-white">Annuler</a>
                </button>

        </form>
    </div>
</body>

</html>