<?php

require_once _ROOTPATH_ . '\templates\head.php';
require_once _ROOTPATH_ . '\templates\header.php';


?>

<main>
        <div class="formulaire">
            <form action="#" method="get">
                <fieldset>
                    
                    <div class="alignementForm">
                        
                        <input type="text" name="titreDuJeux" id="titreDuJeux" class="input" placeholder="Titre du jeux"><br>
                    </div>

                    <div class="alignementBtn">
                        <label for="imageEnTete" class="imageEnTete">Choisissez une image de couverture</label>
                        <input type="file" name="imageEnTete" id="imageEnTete" accept="image/png, image/jpg"><br>
                    </div>

                    <div class="alignementForm">
                        
                        <input type="text" name="pegi" id="pegi" class="input" placeholder="PEGI"><br>
                    </div>
                    <div class="alignementForm">
                       
                        <label for="plateforme">Plateforme :</label>

                            <select name="plateforme" id="plateforme">
                            <option value="">Plateforme</option>
                            <option value="PC">PC</option>
                            <option value="Playstation">Playstation</option>
                            <option value="Xbox">X-box</option>
                            <option value="Nintendo">Nintendo</option>
                            </select><br>
                    </div>
                    <div class="alignementForm">
                        
                        <input type="text" name="prix" id="prix" class="input" placeholder="Prix TTC"><br>
                    </div>
                    
                    <div class="alignementForm">
                        
                        <label for="promotion">Promotion :</label>

                            <select name="promotion" id="promotion">
                            <option value="">Promotion</option>
                            <option value="-5%">-5%</option>
                            <option value="-10%">-10%</option>
                            <option value="-20%">-20%</option>
                            </select><br>
                    </div>
                    
                    <div class="alignementForm">
                        
                        <input type="number" name="stock" id="stock" class="input" placeholder="Stock"><br>
                    </div>
                    <div class="alignementForm">
                        
                        <label for="genre">Genre :</label>

                            <select name="genre" id="genre">
                            <option value="">Genre</option>
                            <option value="Action">Action</option>
                            <option value="Aventure">Aventure</option>
                            <option value="RPG">RPG</option>
                            <option value="MMO">MMO</option>
                            <option value="Strategie">Stratégie</option>
                            <option value="Casual">Casual</option>
                            </select><br>
                    </div>

                    <div class="textDescrip">
                        <label for="descriptif">Descriptif :</label>
                        <textarea name="descriptif" id="descriptif" ></textarea>
                    </div>

                    <div class="alignementForm">
                        <input type="button" value="Valider" class="bouton">
                    </div>
                    </fieldset>
            </form>
        </div>
    </main>


<?php

require_once _ROOTPATH_ . '\templates\footer.php';

?>