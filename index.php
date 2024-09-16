<?php

require_once 'templates/head.php';
require_once 'templates/header.php';



?>

<main>
      <section>
        <div class="container">
          <img src="..\Images\signal-5153517_1920.jpg" alt="" class="w-100 image-en-tete col-10">
        </div>

        <!-- Texte de présentation GameStore -->

          <div class="bienvenue container">
          <p class="text-align-center">Bienvenue chez Gamestore !
          Venez découvrir les dernières
          actutalités du monde du jeux vidéo</p>
        </div>
      </section>
        

      <section class="container-fluid mt-4">
    <!-- Premier carrousel -->
     <a href="" class="text-white">
     <h1>Derniers arrivés<i class="bi bi-caret-right text-warning"></i></h1>
     </a>

    <div id="carouselTendances" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="..\Images\Jeux\AC Valhalla panorama.jpg" class="d-block w-100" alt="...">
                <div class="hstack gap-3">
                    <p class="p-2 mt-auto fs-2">Assassin's Creed Valhalla</p>
                    <p class="p-2 mt-auto ms-auto fs-2"><i class="fa-solid fa-triangle-exclamation"></i>+18</p>
                    <div class="vr"></div>
                    <p class="p-2 fs-2"><br>69€99</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="..\Images\Jeux\dark-souls-3.jpg" class="d-block w-100" alt="...">
                <div class="hstack gap-3">
                    <p class="p-2 mt-auto fs-2">Dark Soul's 3</p>
                    <p class="p-2 mt-auto ms-auto fs-2"><i class="fa-solid fa-triangle-exclamation"></i>+18</p>
                    <div class="vr"></div>
                    <p class="p-2 fs-2"><br>69€99</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="..\Images\Jeux\fallout-new-vegas.jpg" class="d-block w-100" alt="...">
                <div class="hstack gap-3">
                    <p class="p-2 mt-auto fs-2">Fallout New Vegas</p>
                    <p class="p-2 mt-auto ms-auto fs-2"><i class="fa-solid fa-triangle-exclamation"></i>+18</p>
                    <div class="vr"></div>
                    <p class="p-2 fs-2"><br>69€99</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselTendances" data-bs-slide="prev">
            <span class="bi bi-arrow-left-circle fs-1 text-warning" aria-hidden="true"></span>
            <span class="visually-hidden-focusable">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselTendances" data-bs-slide="next">
            <span class="bi bi-arrow-right-circle fs-1 text-warning" aria-hidden="true"></span>
            <span class="visually-hidden-focusable">Next</span>
        </button>
    </div>
    <div>

    </div>
</section>
</main>

<?php
    require_once 'templates/footer.php';
?>