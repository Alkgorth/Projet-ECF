<?php

require_once _ROOTPATH_ . '\templates\head.php';
require_once _ROOTPATH_ . '\templates\header.php';

var_dump($genres[0]);
?>

<main>
    <div class="formulaire">
        <form class="m-5 p-4 text-white d-flex " method="POST">

            <fieldset class="col-sm-6 mb-3 mx-auto justify-content-center">
                <legend class="text-center pb-4">Création article</legend>

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

                <div class="dropdown mb-3 text-center">
                    <button class="btn btn-secondary dropdown-toggle" name="pegi" id="pegi" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        PEGI
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">3</a></li>
                        <li><a class="dropdown-item" href="#">7</a></li>
                        <li><a class="dropdown-item" href="#">12</a></li>
                        <li><a class="dropdown-item" href="#">16</a></li>
                        <li><a class="dropdown-item" href="#">18</a></li>
                    </ul>
                </div>

                <div class="mb-3 text-center">
                    <label class="form-label" for="descriptif">Descriptif :</label>
                    <textarea class="form-text" name="descriptif" id="descriptif"></textarea>
                </div>

                <div class="mb-3 text-center">

                    <input type="text" name="developpeur" id="developpeur" class="form-control" placeholder="Développeur"><br>
                </div>
                <div class="mb-3 text-center">

                    <input type="text" name="editeur" id="editeur" class="form-control" placeholder="Éditeur"><br>
                </div>
                <div class="mb-3 text-center">

                    <input type="date" name="dateDeSortie" id="dateDeSortie" class="form-control" placeholder="Date de sortie"><br>
                </div>

                <div class="mb-3 text-center">
                    <label class="form-label" for="genre">Genre :</label>
                    <select class="form-select" name="genre2" id="genre2">
                        <option value="">Genre</option>
                        <?php foreach ($genres as $genre) : ?>
                            <option value="<?php $genre['id_genre'] ?>"><?= $genre['name'] ?></option>
                        <?php endforeach; ?>
                    </select><br>
                </div>
                <select name="genre" id="genre2">
                    <?php foreach ($genres as $genre) : ?>
                        <option value="<?php $genre['id_genre'] ?>"><?= $genre['name'] ?></option>
                    <?php endforeach; ?>
                </select>

                <div class="mb-3 text-center">
                    <a href="index.php?controller=admin&action=jeuxPlateformes">
                        <input type="button" value="Valider" name="enregistrer" class="btn btn-warning m-4">
                    </a>
                </div>
            </fieldset>
        </form>
    </div>
</main>


<?php

require_once _ROOTPATH_ . '\templates\footer.php';

/**
 *   <select class="js-example-basic-multiple" name="states[]" multiple="multiple">
 *   <option value="AL">Alabama</option>
 *   ...
 *   <option value="WY">Wyoming</option>
 *   </select>
 */

?>