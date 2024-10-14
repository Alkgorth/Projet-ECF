<?php

require_once _ROOTPATH_ . '\templates\head.php';
require_once _ROOTPATH_ . '\templates\header.php';

use App\Repository\GameRepository;
use App\Repository\SpecificationsRepository;

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
    <h2 class="text-white">Les Tendances
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#FFB600" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
            <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
        </svg>
    </h2>
    <div id="carouselTendances" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php for ($i = 0; $i < 3; $i++) { ?>
                <div class="carousel-item <?= $i === 0 ? 'active' : '' ?>">
                    <a href="index.php?controller=games&action=jeuxDetail&id=<?= $games[$i]['id'] ?>" id="jeu_carrousel" class="text-decoration-none text-white">
                        <img src="..\Images\Jeux\AC_Valhalla_panorama.jpg" class="d-block w-100" alt="<?= $games[$i]['name'] ?>">
                        <div class="hstack gap-3">
                            <h3 class="p-2 mt-auto fs-2"><?= $games[$i]['name'] ?></h3>
                            <p class="p-2 mt-auto ms-auto fs-2">
                                <i class="bi bi-exclamation-triangle text-warning"></i>
                            <h3 class="p-2 mt-auto fs-2"><?= $games[$i]['pegi_name'] ?></h3>
                            <div class="vr"></div>
                            <p class="p-2 fs-2"><br>
                            <h3 class="p-2 mt-auto fs-2"><?= $games[$i]['specification_price'] ?></h3>
                        </div>
                    </a>
                </div>
            <?php } ?>
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
</section>

<section class="container-fluid mt-4 bg-primary">
    <!-- Deuxieme carrousel -->
    <h2 class="text-white">Changer titre
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#FFB600" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
            <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
        </svg>
    </h2>
    <div id="carouselChangerTitre" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php for ($i = 0; $i < 3; $i++) { ?>
                <div class="carousel-item <?= $i === 0 ? 'active' : '' ?>">
                    <a href="index.php?controller=games&action=jeuxDetail&id=<?= $games[$i]['id'] ?>" id="jeu_carrousel" class="text-decoration-none text-white">
                        <img src="..\Images\Jeux\AC_Valhalla_panorama.jpg" class="d-block w-100" alt="<?= $games[$i]['name'] ?>">
                        <div class="hstack gap-3">
                            <h3 class="p-2 mt-auto fs-2"><?= $games[$i]['name'] ?></h3>
                            <p class="p-2 mt-auto ms-auto fs-2">
                                <i class="bi bi-exclamation-triangle text-warning"></i>
                            <h3 class="p-2 mt-auto fs-2"><?= $games[$i]['pegi_name'] ?></h3>
                            <div class="vr"></div>
                            <p class="p-2 fs-2"><br>
                            <h3 class="p-2 mt-auto fs-2"><?= $games[$i]['specification_price'] ?></h3>
                        </div>
                    </a>
                </div>
            <?php } ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselChangerTitre" data-bs-slide="prev">
            <span class="bi bi-arrow-left-circle fs-1 text-warning" aria-hidden="true"></span>
            <span class="visually-hidden-focusable">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselChangerTitre" data-bs-slide="next">
            <span class="bi bi-arrow-right-circle fs-1 text-warning" aria-hidden="true"></span>
            <span class="visually-hidden-focusable">Next</span>
        </button>
    </div>
</section>

<section class="container-fluid mt-4">
    <!-- Troisieme carrousel -->
    <h2 class="text-white">Meilleures ventes
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#FFB600" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
            <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
        </svg>
    </h2>
    <div id="carouselVentes" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php for ($i = 0; $i < 3; $i++) { ?>
                <div class="carousel-item <?= $i === 0 ? 'active' : '' ?>">
                    <a href="index.php?controller=games&action=jeuxDetail&id=<?= $games[$i]['id'] ?>" id="jeu_carrousel" class="text-decoration-none text-white">
                        <img src="..\Images\Jeux\AC_Valhalla_panorama.jpg" class="d-block w-100" alt="<?= $games[$i]['name'] ?>">
                        <div class="hstack gap-3">
                            <h3 class="p-2 mt-auto fs-2"><?= $games[$i]['name'] ?></h3>
                            <p class="p-2 mt-auto ms-auto fs-2">
                                <i class="bi bi-exclamation-triangle text-warning"></i>
                            <h3 class="p-2 mt-auto fs-2"><?= $games[$i]['pegi_name'] ?></h3>
                            <div class="vr"></div>
                            <p class="p-2 fs-2"><br>
                            <h3 class="p-2 mt-auto fs-2"><?= $games[$i]['specification_price'] ?></h3>
                        </div>
                    </a>
                </div>
            <?php } ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselVentes" data-bs-slide="prev">
            <span class="bi bi-arrow-left-circle fs-1 text-warning" aria-hidden="true"></span>
            <span class="visually-hidden-focusable">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselVentes" data-bs-slide="next">
            <span class="bi bi-arrow-right-circle fs-1 text-warning" aria-hidden="true"></span>
            <span class="visually-hidden-focusable">Next</span>
        </button>
    </div>
</section>

<?php
require_once _ROOTPATH_ . '\templates\footer.php';
?>