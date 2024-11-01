<?php

require_once _ROOTPATH_ . '\templates\head.php';
require_once _ROOTPATH_ . '\templates\header.php';

?>
<main>
    <div class="container">
        <form class="m-5 p-4 text-white d-flex " method="POST">
            <fieldset class="col-sm-6 mb-3 mx-auto justify-content-center">
                <h3 class="text-center pb-4">Plateformes et prix</h3>
                <div class="row d-block">

                    <div class="form-group">
                        <div class="form-check form-check-inline mb-3">
                            <legend class="form">En promotion ?</legend>

                            <input class="form-check-input" type="radio" name="promotion" id="promotion" value="oui">
                            <label class="form-check-label" for="promotion">Oui</label>
                        </div>
                        <div class="form-check form-check-inline mb-3">
                            <input class="form-check-input" type="radio" name="promotion" id="promotion" value="non" checked>
                            <label class="form-check-label" for="promotion">Non</label>
                        </div>
                    </div>

                    <div class="mb-3 text-center">
                        <label class="form-label" for="promotion">Promotion :</label>
                        <select class="form-select" name="promotion" id="promotion">
                            <option value="">Pourcentage de la promotion</option>
                            <option value="-5%">-5%</option>
                            <option value="-10%">-10%</option>
                            <option value="-20%">-20%</option>
                        </select><br>
                    </div>
                </div>

                <div class="mb-3 text-center">
                    <label class="form-label" for="boutique">Boutique :</label>
                    <select class="form-select" name="boutique" id="boutique">
                        <option value="">Magasin</option>
                        <option value="lille">Lille</option>
                        <option value="nantes">Nantes</option>
                        <option value="bordeaux">Bordeaux</option>
                        <option value="toulouse">Toulouse</option>
                        <option value="paris">Paris</option>
                    </select><br>
                </div>

                <div class="mb-3 text-center">
                    <input type="number" name="stock" id="stock" class="form-control" placeholder="Stock"><br>
                </div>

                <div class="mb-3 text-center">
                    <a href="index.php?controller=admin&action=adminCreationArticle">
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