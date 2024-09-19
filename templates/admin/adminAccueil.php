<?php

require_once _ROOTPATH_ . '\templates\head.php';
require_once _ROOTPATH_ . '\templates\header.php';


?>

<main>
        <section>
            <div >
              <img src="../Images/Admin.png" alt="" class="image-en-tete" width="700">
            </div>
        </section>
        <section class="listeMenu">
            <ul class="menu text-white">
                <li class="text-white"><a href="">Créer employé</a></li>
                <li><a href="">Afficher les ventes</a></li>
                <li><a href="">Créer article</a></li>
                <li><a href="">Gérer les stocks</a></li>
                <li><a href="">Tableau des ventes</a></li>
            </ul>
        </section>
    </main>

<?php

require_once _ROOTPATH_ . '\templates\footer.php';

?>