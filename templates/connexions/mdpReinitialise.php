<?php

require_once _ROOTPATH_ . '\templates\head.php';

?>

<body>

    <div class="container-fluid px-5 mt-5 row d-flex justify-content-center">
        <a href="../index.php" class="text-center">
            <img src="..\assets\images\Logo GameStore-2.png" alt="Logo GameStore" class="pb-4" width="400">
        </a>

        <div class="container border text-center m-4">
            <p>Votre mot de passe à bien été réinitialisé</p>
        </div>
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-warning mb-4" name="retourConnexion">
                <a href="index.php?controller=connexions&action=connexion" class="liens">Retour à la page de connexion</a>
            </button>
        </div>
    </div>
</body>

</html>