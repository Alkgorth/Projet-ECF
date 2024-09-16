<?php

require_once 'head.php';
require_once 'header.php';



?>

<section>
    <!-- Barre du menu plateformes -->
    <div>
        <nav class="nav nav-pills flex-column flex-sm-row">
            <a class="flex-sm-fill text-sm-center nav-link active" aria-current="page" href="#">PC</a>
            <a class="flex-sm-fill text-sm-center nav-link text-white" href="#">Playstation</a>
            <a class="flex-sm-fill text-sm-center nav-link text-white" href="#">Xbox</a>
            <a class="flex-sm-fill text-sm-center nav-link text-white" aria-disabled="true">Nintendo</a>
            <a class="flex-sm-fill text-sm-center nav-link text-white" aria-disabled="true">+ de filtres</a>

        </nav>

    </div>
</section>

<section class="container-fluid mt-4">
    <!-- Premier carrousel -->
<h1>Les tendances<i class="bi bi-caret-right text-warning"></i></h1>
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

<section class="container-fluid mt-4 bg-primary">
    <!-- Deuxieme carrousel -->
<h1>Les promotions<i class="bi bi-caret-right text-warning"></i></h1>
    <div id="carouselPrecommande" class="carousel slide" data-bs-ride="carousel">
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
                    <p class="p-2 mt-auto fs-2">Assassin's Creed Valhalla</p>
                    <p class="p-2 mt-auto ms-auto fs-2"><i class="fa-solid fa-triangle-exclamation"></i>+18</p>
                    <div class="vr"></div>
                    <p class="p-2 fs-2"><br>69€99</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="..\Images\Jeux\fallout-new-vegas.jpg" class="d-block w-100" alt="...">
                <div class="hstack gap-3">
                    <p class="p-2 mt-auto fs-2">Assassin's Creed Valhalla</p>
                    <p class="p-2 mt-auto ms-auto fs-2"><i class="fa-solid fa-triangle-exclamation"></i>+18</p>
                    <div class="vr"></div>
                    <p class="p-2 fs-2"><br>69€99</p>
                </div>
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
</section>

<section class="container-fluid mt-4 mb-2">
    <!-- Troisieme carrousel -->
<h1>Meilleurs ventes<i class="bi bi-caret-right text-warning"></i></h1>
    <div id="carouselMeilleursVentes" class="carousel slide" data-bs-ride="carousel">
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
                    <p class="p-2 mt-auto fs-2">Assassin's Creed Valhalla</p>
                    <p class="p-2 mt-auto ms-auto fs-2"><i class="fa-solid fa-triangle-exclamation"></i>+18</p>
                    <div class="vr"></div>
                    <p class="p-2 fs-2"><br>69€99</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="..\Images\Jeux\fallout-new-vegas.jpg" class="d-block w-100" alt="...">
                <div class="hstack gap-3">
                    <p class="p-2 mt-auto fs-2">Assassin's Creed Valhalla</p>
                    <p class="p-2 mt-auto ms-auto fs-2"><i class="fa-solid fa-triangle-exclamation"></i>+18</p>
                    <div class="vr"></div>
                    <p class="p-2 fs-2"><br>69€99</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselMeilleursVentes" data-bs-slide="prev">
            <span class="bi bi-arrow-left-circle fs-1 text-warning" aria-hidden="true"></span>
            <span class="visually-hidden-focusable">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselMeilleursVentes" data-bs-slide="next">
            <span class="bi bi-arrow-right-circle fs-1 text-warning" aria-hidden="true"></span>
            <span class="visually-hidden-focusable">Next</span>
        </button>
    </div>
    <div>

    </div>
</section>

<?php
require_once 'footer.php';
?>