<?php

require_once _ROOTPATH_ . '\templates\head.php';
require_once _ROOTPATH_ . '\templates\header.php';



?>

<main>
    <section>
        <div class="background-container">
            <img src="..\assets\images\signal-5153517_1920.jpg" alt="" class="w-100 image-en-tete col-10">
        </div>

        <!-- Texte de présentation GameStore -->

        <div class="bienvenue container p-4">
            <p class="text-align-center fs-4">GameStore, fondée en 2020, est votre destination idéale
                pour tous vos besoins en jeux vidéo. Avec une vaste sélection pour toutes les plateformes,
                nous offrons également des événements et des tournois pour les passionnés. Rejoignez-nous
                et plongez dans le monde du jeu avec GameStore!</p>
        </div>
    </section>


    <section class="container-fluid mt-4">
        <!-- Premier carrousel -->
        <a href="index.php?controller=games&action=jeuxGlobal" class="text-white">
            <h1>Derniers arrivés
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#FFB600" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                    <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                </svg>
            </h1>
        </a>

        <div id="carouselNews" class="carousel slide mt-4 col-10" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php for ($i = 0; $i < 3; $i++) { ?>
                    <div class="carousel-item <?= $i === 0 ? 'active' : '' ?>">
                        <a href="index.php?controller=games&action=jeuxDetail&id=<?= $games[$i]['id'] ?>" id="jeu_carrousel" class="text-decoration-none text-white">
                            <img src="..\assets\images\Jeux\AC_Valhalla_panorama.jpg" class="d-block w-100" alt="<?= $games[$i]['name'] ?>">
                                <div class="hstack gap-3">
                                    <h1 class="p-2 mt-auto fs-2"><?= $games[$i]['name'] ?></h1>
                                    <p class="card-text ps-5 fs-2 mt-auto"><?= $games[$i]['plateforme_name'] ?></p>
                                    <p class="p-2 mt-auto ms-auto fs-2">
                                        <i class="bi bi-exclamation-triangle text-warning"></i>
                                    </p>
                                    <h1 class="p-2 mt-auto fs-2"><?= $games[$i]['pegi_name'] ?></h1>
                                <div class="vr">
                                </div>
                                    <p class="p-2 fs-2"></p><br>
                                    <h1 class="p-2 mt-auto fs-2"><?= $games[$i]['specification_price'] ?></h1>
                                </div>
                        </a>
                    </div>
                <?php } ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselNews" data-bs-slide="prev">
                <span class="bi bi-arrow-left-circle fs-1 text-warning" aria-hidden="true"></span>
                <span class="visually-hidden-focusable">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselNews" data-bs-slide="next">
                <span class="bi bi-arrow-right-circle fs-1 text-warning" aria-hidden="true"></span>
                <span class="visually-hidden-focusable">Next</span>
            </button>
        </div>
    </section>

    <section class="container-fluid mt-4 mb-4">
        <!-- Deuxième carrousel -->
        <a href="index.php?controller=games&action=promos" class="text-white">
            <h1>Promotions
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#FFB600" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                    <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                </svg>
            </h1>
        </a>

        <div id="carouselPromotions" class="carousel slide mt-4 col-10" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php for ($i = 0; $i < 3; $i++) { ?>
                    <div class="carousel-item <?= $i === 0 ? 'active' : '' ?>">
                        <a href="index.php?controller=games&action=promos" id="jeu_carrousel" class="text-decoration-none text-white">
                            <img src="..\assets\images\Jeux\AC_Valhalla_panorama.jpg" class="d-block w-100" alt="<?= $games[$i]['name'] ?>">
                                <div class="hstack gap-3">
                                    <h1 class="p-2 mt-auto fs-2"><?= $games[$i]['name'] ?></h1>
                                    <p class="p-2 mt-auto ms-auto fs-2">
                                        <i class="bi bi-exclamation-triangle text-warning"></i>
                                    </p>
                                    <h1 class="p-2 mt-auto fs-2"><?= $games[$i]['pegi_name'] ?></h1>
                                <div class="vr">
                                </div>
                                    <p class="p-2 fs-2"></p><br>
                                    <h1 class="p-2 mt-auto fs-2"><?= $games[$i]['specification_price'] ?></h1>
                                </div>
                        </a>
                    </div>
                <?php } ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselPromotions" data-bs-slide="prev">
                <span class="bi bi-arrow-left-circle fs-1 text-warning" aria-hidden="true"></span>
                <span class="visually-hidden-focusable">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselPromotions" data-bs-slide="next">
                <span class="bi bi-arrow-right-circle fs-1 text-warning" aria-hidden="true"></span>
                <span class="visually-hidden-focusable">Next</span>
            </button>


        </div>
    </section>
</main>

<?php

require_once _ROOTPATH_ . '\templates\footer.php';

?>