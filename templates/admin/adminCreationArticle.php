<?php

require_once _ROOTPATH_ . '\templates\head.php';
require_once _ROOTPATH_ . '\templates\header.php';


?>

<main>
    <div class="formulaire">
        <form class="m-5 p-4 text-white" method="POST">
            <h1 class="text-center pb-4">Création article</h1>

            <fieldset>

                <div class="mb-3 text-center">

                    <input type="text" name="titreDuJeux" id="titreDuJeux" class="form-control" placeholder="Titre du jeux"><br>
                </div>

                <div class="alignementBtn">
                    <label for="imageEnTete" class="form-label">Choisissez une image de couverture</label>
                    <input type="file" class="form-control" name="imageEnTete" id="imageEnTete" accept="image/png, image/jpg"><br>
                    <label for="imagesCarrousel" class="form-label">Choisissez les images du carrousel (maintenir la touche "ctrl" pour sélectionner plusieurs images)</label>
                    <input type="file" class="form-control" name="imagesCarrousel" id="imagesCarrousel" accept="image/png, image/jpg" multiple><br>
                </div>

                <div class="mb-3 text-center">

                    <input type="text" name="pegi" id="pegi" class="form-control" placeholder="PEGI"><br>
                </div>
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

                    <label class="form-label" for="promotion">Promotion :</label>

                    <select class="form-select" name="promotion" id="promotion">
                        <option value="">Promotion</option>
                        <option value="-5%">-5%</option>
                        <option value="-10%">-10%</option>
                        <option value="-20%">-20%</option>
                    </select><br>
                </div>

                <div class="mb-3 text-center">

                    <input type="number" name="stock" id="stock" class="form-control" placeholder="Stock"><br>
                </div>
                <div class="mb-3 text-center">

                    <label class="form-label" for="genre">Genre :</label>

                    <select class="form-select" name="genre" id="genre">
                        <option value="">Genre</option>
                        <option value="Action">Action</option>
                        <option value="Aventure">Aventure</option>
                        <option value="RPG">RPG</option>
                        <option value="MMO">MMO</option>
                        <option value="Strategie">Stratégie</option>
                        <option value="Casual">Casual</option>
                    </select><br>
                </div>

                <div class="mb-3 text-center">
                    <label class="form-label" for="descriptif">Descriptif :</label>
                    <textarea class="form-text" name="descriptif" id="descriptif"></textarea>
                </div>

                <div class="mb-3 text-center">
                    <input type="button" value="Valider" class="btn btn-warning m-4">
                </div>
            </fieldset>
        </form>
    </div>
</main>


<?php

require_once _ROOTPATH_ . '\templates\footer.php';

?>