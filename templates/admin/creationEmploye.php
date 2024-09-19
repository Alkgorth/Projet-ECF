<?php

require_once _ROOTPATH_ . '\templates\head.php';
require_once _ROOTPATH_ . '\templates\header.php';


?>

<main>
        <div class="formulaire d-flex justify-content-center">
            <form action="#" method="post">
                <fieldset>
                    <legend>Nouvel employé</legend>
                    <div class="alignementForm">
                        
                        <input type="text" name="nom" id="nom" class="input" placeholder="Nom"><br>
                    </div>
                    <div class="alignementForm">
                        
                        <input type="text" name="prenom" id="prenom" class="input" placeholder="Prénom"><br>
                    </div>
                    <!-- <div class="alignementForm">
                        
                            <input type="text" name="poste" id="poste" class="input" placeholder="Poste"><br>
                        </div>
                        <div class="alignementForm">
                            
                            <input type="text" name="dateEmbauche" id="dateEmbauche" class="input" placeholder="Date d'embauche"><br>
                        </div> -->

                        <!-- <div class="alignementForm">
                            <label for="lieuDeTravail">Lieu de travail :</label>

                            <select name="lieuDeTravail" id="lieuDeTravail">
                            <option value="">Lieu de travail</option>
                            <option value="Bordeaux">Bordeaux</option>
                            <option value="Lille">Lille</option>
                            <option value="Nantes">Nantes</option>
                            <option value="Paris">Paris</option>
                            <option value="Toulouse">Toulouse</option>
                            </select><br>
                        </div> -->

                    
                        <div class="alignementForm">
                        
                        <input type="email" name="email" id="email" class="input" placeholder="Mail"><br>
                    </div>

                    <div class="alignementForm">
                        
                        <input type="password" name="password" id="password" class="input" placeholder="Mot de passe"><br>
                    </div>
                    <div class="alignementForm">
                       
                        <input type="password" name="password" id="confirmPassword" class="input" placeholder="Confirmer mot de passe"><br>
                    </div>
                    <div class="alignementForm">
                        <input type="button" value="Valider la création" class="bouton">
                    </div>

                </fieldset>
            </form>
        </div>
    </main>

<?php

require_once _ROOTPATH_ . '\templates\footer.php';

?>