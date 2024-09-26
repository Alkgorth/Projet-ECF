<?php

require_once _ROOTPATH_ . '\templates\head.php';
require_once _ROOTPATH_ . '\templates\header.php';

use App\Repository\GameRepository;
use App\Repository\SpecificationsRepository;

?>

<main>
    <section>
        <div class="container">
            <img src="..\Images\signal-5153517_1920.jpg" alt="" class="w-100 image-en-tete col-10">
        </div>

        <!-- Texte de présentation GameStore -->

        <div class="bienvenue container">
            <p class="text-align-center">GameStore, fondée en 2020, est votre destination idéale
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

        <div id="carouselTendances" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <a href="index.php?controller=games&action=jeuxDetail" id="jeu_carrousel" class="text-decoration-none text-white">
                        <img src="..\Images\Jeux\AC_Valhalla_panorama.jpg" class="d-block w-100" alt="Assassin's Creed Vahlalla">
                            <div class="hstack gap-3">
                                
                                    <?php
                                        $gameRepository = new GameRepository;
                                        $datas = $gameRepository->findNameById(1);
                                        echo '<h1 class="p-2 mt-auto fs-2">'.$datas.'</h1>';
                                    ?>
                                
                                <p class="p-2 mt-auto ms-auto fs-2"><i class="bi bi-exclamation-triangle text-warning"></i>
                                    <?php
                                        $gameRepository = new GameRepository;
                                        $datas = $gameRepository->findPegiById(1);
                                        echo '<h1 class="p-2 mt-auto fs-2">'.'Pegi '.$datas.'</h1>';
                                    ?>
                                </p>
                                <div class="vr"></div>
                                <p class="p-2 fs-2"><br>
                                    <?php
                                        $specificationsRepository = new SpecificationsRepository;
                                        $datas = $specificationsRepository->findPriceById(1);
                                        echo '<h1 class="p-2 mt-auto fs-2">'.$datas.'</h1>';
                                    ?>
                                </p>
                            </div>
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="index.php?controller=games&action=jeuxDetail" id="jeu_carrousel" class="text-decoration-none text-white">
                        <img src="..\Images\Jeux\dark-souls-3.jpg" class="d-block w-100" alt="...">
                        <div class="hstack gap-3">
                            
                                <?php
                                    $gameRepository = new GameRepository;
                                    $datas = $gameRepository->findNameById(2);
                                    echo '<h1 class="p-2 mt-auto fs-2">'.$datas.'</h1>';
                                ?>
                            
                            <p class="p-2 mt-auto ms-auto fs-2"><i class="bi bi-exclamation-triangle text-warning"></i>
                                <?php
                                    $gameRepository = new GameRepository;
                                    $datas = $gameRepository->findPegiById(2);
                                    echo '<h1 class="p-2 mt-auto ms-auto fs-2">'.'Pegi '.$datas.'</h1>';
                                ?>
                            </p>
                            <div class="vr"></div>
                            <p class="p-2 fs-2"><br>
                                    <?php
                                        $specificationsRepository = new SpecificationsRepository;
                                        $datas = $specificationsRepository->findPriceById(2);
                                        echo '<h1 class="p-2 mt-auto fs-2">'.$datas.'</h1>';
                                    ?>
                            </p>
                        </div>
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="index.php?controller=games&action=jeuxDetail" id="jeu_carrousel" class="text-decoration-none text-white">
                        <img src="..\Images\Jeux\fallout-new-vegas.jpg" class="d-block w-100" alt="...">
                        <div class="hstack gap-3">
                            
                                <?php
                                    $gameRepository = new GameRepository;
                                    $datas = $gameRepository->findNameById(3);
                                    echo '<h1 class="p-2 mt-auto fs-2">'.$datas.'</h1>';
                                ?>
                            
                            <p class="p-2 mt-auto ms-auto fs-2"><i class="bi bi-exclamation-triangle text-warning"></i>
                                <?php
                                    $gameRepository = new GameRepository;
                                    $datas = $gameRepository->findPegiById(3);
                                    echo '<h1 class="p-2 mt-auto fs-2">'.'Pegi '.$datas.'</h1>';
                                ?>
                            </p>
                            <div class="vr"></div>
                            <p class="p-2 fs-2"><br>
                                    <?php
                                        $specificationsRepository = new SpecificationsRepository;
                                        $datas = $specificationsRepository->findPriceById(3);
                                        echo '<h1 class="p-2 mt-auto fs-2">'.$datas.'</h1>';
                                    ?>
                            </p>
                        </div>
                    </a>
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

require_once _ROOTPATH_ . '\templates\footer.php';

?>