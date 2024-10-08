<?php

require_once _ROOTPATH_ . '\templates\head.php';
require_once _ROOTPATH_ . '\templates\header.php';



?>

<!-- Image en-tête -->
<section>
    <div class="container mt-4">

    <?php var_dump($gamesDetails); ?>
        <img src="..\Images\Jeux\AC_Valhalla_panorama.jpg" class="d-block w-100" alt="Assassin's Creed Valhalla">
    </div>
    <div class="container p-4">
        <div class="row row-cols-1 row-cols-md-2 align-items-center">

           
            
            <p class="text-center fs-2"><?= $gamesDetails['name'] ?></p>

            
            <p class="text-center fs-2">
                <i class="bi bi-exclamation-triangle text-warning me-2"></i>
                <?= $gamesDetails['pegi_name'] ?>
                </p>
            <p class="text-center fs-2"></p>
           


        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 align-items-center">
            <div class="dropdown text-center">
                <button class="btn btn-secondary dropdown-toggle fs-2" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Plateforme
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item fs-2" href="#">Playstation</a></li>
                    <li><a class="dropdown-item fs-2" href="#">Nintendo</a></li>
                    <li><a class="dropdown-item fs-2" href="#">X box</a></li>
                    <li><a class="dropdown-item fs-2" href="#">PC</a></li>
                </ul>
            </div>

            <p class="fs-2 text-center">Prix :<?= $gamesDetails['specification_price'] ?></p>
            

            <p class="fs-2 text-center"><br>En stock : <span>0</span></p>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <button type="button" class="btn btn-warning text-center fs-2">Ajouter au panier</button>
    </div>


</section>

<section class="bg-primary p-4">
    <div class="container">
        <!-- Carrousel Visuels -->
        <h1>Visuels</h1>
        <div id="carouselPrecommande" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="..\Images\Jeux\AC Valhalla\assassin-s-creed-valhalla-pc-jeu-ubisoft-connect-europe-wallpaper-1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="..\Images\Jeux\AC Valhalla\assassin-s-creed-valhalla-pc-jeu-ubisoft-connect-europe-wallpaper-2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="..\Images\Jeux\AC Valhalla\assassin-s-creed-valhalla-pc-jeu-ubisoft-connect-europe-wallpaper-3.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselPrecommande" data-bs-slide="prev">
                <span class="bi bi-arrow-left-circle fs-1 text-warning" aria-hidden="true"></span>
                <span class="visually-hidden-focusable">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselPrecommande" data-bs-slide="next">
                <span class="bi bi-arrow-right-circle fs-1 text-warning" aria-hidden="true"></span>
                <span class="visually-hidden-focusable">Next</span>
            </button>
        </div>
        <div>

        </div>
    </div>
</section>

<section class="container-fluid">
    <div class="container">
        <h2>Descrition</h2>
        <p class="fs-2  text-center">
            Assassin's Creed Valhalla pour PC est le 12ème épisode de la série Assassin's
            Creed, et ce dernier se déroule au 9ème siècle (à partir de 873) et vous emmène
            partout en Europe pour faire voyager votre clan d'une Norvège grav...
        </p>
    </div>

    <div class="container">
        <h2>A propos</h2>
        <p class="text-center fs-2">
            Développeur: Ubisoft<br>
            Editeur: Ubisoft<br>
            Date de sortie: 10 novembre 2020<br>
            Genre:Action, Aventure<br>
        </p>
    </div>
</section>

<section class="container-fluid">
    <div class="col p-3">
        <img src="..\Images\Jeux\Diverses\square-Enix-889x500.jpg" class="w-50" alt="">
        <p></p>
        <p></p>

    </div>

    <div>

    </div>

    <div>

    </div>
</section>

<?php
require_once _ROOTPATH_ . '\templates\footer.php';
?>