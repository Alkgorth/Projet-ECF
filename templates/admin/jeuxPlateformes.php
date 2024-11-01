<?php

require_once _ROOTPATH_ . '\templates\head.php';
require_once _ROOTPATH_ . '\templates\header.php';


?>

<main>
    <div>
        <form class="m-5 p-4 text-white d-flex " method="POST">

            <fieldset class="col-sm-6 mb-3 mx-auto justify-content-center">
                <legend class="text-center pb-4 fs-2">Création article</legend>
                <h3 class="text-center pb-4">Plateformes et prix</h3>

                <div class="mb-3 text-center">

                    <label class="form-label" for="plateforme">Plateforme :</label>

                    <select class="form-select" name="plateforme" id="plateforme">
                        <option value="">Plateforme</option>
                        <option value="PC">PC</option>
                        <option value="Playstation">Playstation</option>
                        <option value="Xbox">X-box</option>
                        <option value="Nintendo">Nintendo</option>
                    </select><br>
                </div>

                <div class="mb-3 text-center">
                    <input type="text" name="prix" id="prix" class="form-control" placeholder="Prix TTC"><br>
                </div>


                <div class="mb-3 text-center">
                    <a href="index.php?controller=admin&action=jeuxMagasins">
                        <input type="button" value="Valider" name="enregistrer" class="btn btn-warning m-4">
                    </a>
                </div>
            </fieldset>
        </form>
    </div>
</main>

<?php

require_once _ROOTPATH_ . '\templates\footer.php';

?>