<?php

require_once _ROOTPATH_ . '\templates\head.php';
require_once _ROOTPATH_ . '\templates\header.php';


?>

<main>

    <!-- Section de Mon Panier -->

    <div class="fond">
        <h2>Mon panier</h2>
        <section class="panier">

            <div class="ficheJeux">
                <img src="../Images/Jeux/GodFall panorama.jpg" alt="Jaquette du jeux GodFall" class="jaquette">
                <p class="titre">GodFall</p>
                <p class="prix">69€99</p>

                <p class="age"><i class="fa-solid fa-triangle-exclamation"></i>+18</p>

                <p class="poubelle"><i class="fa-solid fa-trash-can"></i></p>

                <div class="menuQuantite">
                    <p class="quantite">01<i class="fa-solid fa-angle-down"></i></p>
                </div>
            </div>
    </div>

    <div class="ficheJeux fond2">
        <img src="../Images/Jeux/far-cry-6.jpg" alt="Jaquette du jeux GodFall" class="jaquette">
        <p class="titre">Far Cry 6</p>
        <p class="age"><i class="fa-solid fa-triangle-exclamation"></i>+18</p>
        <p class="prix">69€99</p>
        <p class="poubelle"><i class="fa-solid fa-trash-can"></i></p>
        <div class="menuQuantite">
            <p class="quantite">01<i class="fa-solid fa-angle-down"></i></p>
        </div>
    </div>

    <div class="fond3">
        <div class="ficheJeux">
            <img src="../Images/Jeux/Elden Ring.jpeg" alt="Jaquette du jeux GodFall" class="jaquette">
            <p class="titre">Far Cry 6</p>
            <p class="prix">69€99</p>
            <p class="age"><i class="fa-solid fa-triangle-exclamation"></i>+18</p>
            <p class="poubelle"><i class="fa-solid fa-trash-can"></i></p>
            <div class="menuQuantite">
                <p class="quantite">01<i class="fa-solid fa-angle-down"></i></p>
            </div>
        </div>
    </div>

    <div class="total">
        <p>Nombre articles : ....</p>
        <p>Total : ....</p>
    </div>
    </section>

    <!-- Carrousel des produits recommandés -->

    <section class="produits">
        <h2>Produits recommandés pour vous</i></h2>
        <div class="carrousel">
            <div>
                <i class="fa-solid fa-circle-arrow-left"></i>
            </div>

            <div class="grid">
                <img src="../Images/Jeux/AC Valhalla panorama.jpg" alt="Panorama Assassin's Creed Valhalla" class="ACValhalla">
                <p class="titreJeux">Assassin's Creed Valhalla</p>
                <p class="pegi"><i class="fa-solid fa-triangle-exclamation"></i>+18</p>
                <p class="tarif"><br>69€99</p>
            </div>

            <div class="grid">
                <img src="../Images/Jeux/far-cry-6.jpg" alt="Panorama Far Cry 6" class="farCry">
                <p class="titreJeux">Far Cry 6</p>
                <p class="pegi"><i class="fa-solid fa-triangle-exclamation"></i>+18</p>
                <p class="tarif"><br>69€99</p>
            </div>
            <div>
                <i class="fa-solid fa-circle-arrow-right"></i>
            </div>
        </div>
    </section>

    <!-- Choix de la date et du lieu de retrait -->

    <section class="calendrier">

        <div class="alignementForm text-center">
            <label for="lieuDeTravail">Lieu de retrait :</label>

            <select name="lieuDeRetrait" id="lieuDeRetrait">
                <option value="">Proche de moi</option>
                <option value="Bordeaux">Bordeaux</option>
                <option value="Lille">Lille</option>
                <option value="Nantes">Nantes</option>
                <option value="Paris">Paris</option>
                <option value="Toulouse">Toulouse</option>
            </select><br>
        </div>

        <span class="choixDate">Quand retirer : &#x1F4C5;</span>
    </section>

    <div class="Valider">
        <button class="btnValider">Valider</button>
    </div>
</main>

<?php

require_once _ROOTPATH_ . '\templates\footer.php';

?>