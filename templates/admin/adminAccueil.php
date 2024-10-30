<?php

require_once _ROOTPATH_ . '\templates\head.php';
require_once _ROOTPATH_ . '\templates\header.php';


?>

<main>
        <section>
            <div >
              <img src="..\assets\images\Admin.png" alt="" class="image-en-tete" width="700">
            </div>
        </section>
        <section class="listeMenu">
            <ul class="menu ">
                <li ><a href="index.php?controller=admin&action=creationEmploye" class="text-white">Créer employé</a></li>
                <li><a href="index.php?controller=admin&action=adminAccueil" class="text-white">Afficher les ventes</a></li>
                <li><a href="index.php?controller=admin&action=adminCreationArticle" class="text-white">Créer article</a></li>
                <li><a href="index.php?controller=admin&action=gestionStocks" class="text-white">Gérer les stocks</a></li>
                <li><a href="index.php?controller=admin&action=adminAccueil" class="text-white">Tableau des ventes</a></li>
            </ul>
        </section>
    </main>

<?php

require_once _ROOTPATH_ . '\templates\footer.php';

?>