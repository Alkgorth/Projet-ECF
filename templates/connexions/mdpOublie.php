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
                <label for="email" class="form-label pb-2">Demande de réinitialisation de mot de passe</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                </div>

                <div class="d-flex justify-content-center p-4">
                    <button type="submit" class="btn btn-dark">
                        <a href="index.php?controller=connexions&action=mdpReinitialise">
                            Envoyer
                        </a>
                    </button>
                </div>
                <button>
                    <a href="index.php?controller=connexions&action=connexion">Annuler</a>
                </button>

        </form>
    </div>
</body>

</html>