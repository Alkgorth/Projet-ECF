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
<h1>Les tendances<i class="bi bi-caret-right text-warning"></i></h1>

    <div id="carouselTendances" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="..\Images\Jeux\AC_Valhalla_panorama.jpg" class="d-block w-100" alt="...">
                <div class="hstack gap-3">

                    <?php
                        
                        echo '<h1 class="p-2 mt-auto fs-2">'.$datas->getName().'</h1>';
                                    
                        
                        echo '<p class="p-2 mt-auto ms-auto fs-2">
                        <i class="bi bi-exclamation-triangle text-warning"></i>
                        <h1 class="p-2 mt-auto fs-2">'.'Pegi '.$datas->getIdPegi().'</h1>';
                                    
                        $specificationsRepository = new SpecificationsRepository;
                        $price = $specificationsRepository->findPriceById(1);
                        echo '<div class="vr"></div>
                        <p class="p-2 fs-2"><br>
                        <h1 class="p-2 mt-auto fs-2">'.$price->getPrice().'</h1>';
                    ?>

                </div>
            </div>

            <div class="carousel-item">
                <img src="..\Images\Jeux\dark-souls-3.jpg" class="d-block w-100" alt="...">
                <div class="hstack gap-3">

                    <?php
                        $gameRepository = new GameRepository;
                        $datas = $gameRepository->findNameById(2);
                        echo '<h1 class="p-2 mt-auto fs-2">'.$datas.'</h1>';
                                    
                        $gameRepository = new GameRepository;
                        $datas = $gameRepository->findPegiById(2);
                        echo '<p class="p-2 mt-auto ms-auto fs-2">
                        <i class="bi bi-exclamation-triangle text-warning"></i>
                        <h1 class="p-2 mt-auto fs-2">'.'Pegi '.$datas.'</h1>';
                                    
                        $specificationsRepository = new SpecificationsRepository;
                        $datas = $specificationsRepository->findPriceById(2);
                        echo '<div class="vr"></div>
                        <p class="p-2 fs-2"><br>
                        <h1 class="p-2 mt-auto fs-2">'.$datas.'</h1>';
                    ?>

                </div>
            </div>
            <div class="carousel-item">
                <img src="..\Images\Jeux\fallout-new-vegas.jpg" class="d-block w-100" alt="...">
                <div class="hstack gap-3">

                    <?php
                        $gameRepository = new GameRepository;
                        $datas = $gameRepository->findNameById(3);
                        echo '<h1 class="p-2 mt-auto fs-2">'.$datas.'</h1>';
                                    
                        $gameRepository = new GameRepository;
                        $datas = $gameRepository->findPegiById(3);
                        echo '<p class="p-2 mt-auto ms-auto fs-2">
                        <i class="bi bi-exclamation-triangle text-warning"></i>
                        <h1 class="p-2 mt-auto fs-2">'.'Pegi '.$datas.'</h1>';
                                    
                        $specificationsRepository = new SpecificationsRepository;
                        $datas = $specificationsRepository->findPriceById(3);
                        echo '<div class="vr"></div>
                        <p class="p-2 fs-2"><br>
                        <h1 class="p-2 mt-auto fs-2">'.$datas.'</h1>';
                    ?>

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

</section>

<section class="container-fluid mt-4 bg-primary">
    <!-- Deuxieme carrousel -->
     <a href=""></a>
<h1>Les promotions<i class="bi bi-caret-right text-warning"></i></h1>

<div id="carouselTendances" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="..\Images\Jeux\AC_Valhalla_panorama.jpg" class="d-block w-100" alt="...">
                <div class="hstack gap-3">

                    <?php
                        $gameRepository = new GameRepository;
                        $datas = $gameRepository->findNameById(1);
                        echo '<h1 class="p-2 mt-auto fs-2">'.$datas.'</h1>';
                                    
                        $gameRepository = new GameRepository;
                        $datas = $gameRepository->findPegiById(1);
                        echo '<p class="p-2 mt-auto ms-auto fs-2">
                        <i class="bi bi-exclamation-triangle text-warning"></i>
                        <h1 class="p-2 mt-auto fs-2">'.'Pegi '.$datas.'</h1>';
                                    
                        $specificationsRepository = new SpecificationsRepository;
                        $datas = $specificationsRepository->findPriceById(1);
                        echo '<div class="vr"></div>
                        <p class="p-2 fs-2"><br>
                        <h1 class="p-2 mt-auto fs-2">'.$datas.'</h1>';
                    ?>

                </div>
            </div>

            <div class="carousel-item">
                <img src="..\Images\Jeux\dark-souls-3.jpg" class="d-block w-100" alt="...">
                <div class="hstack gap-3">

                    <?php
                        $gameRepository = new GameRepository;
                        $datas = $gameRepository->findNameById(2);
                        echo '<h1 class="p-2 mt-auto fs-2">'.$datas.'</h1>';
                                    
                        $gameRepository = new GameRepository;
                        $datas = $gameRepository->findPegiById(2);
                        echo '<p class="p-2 mt-auto ms-auto fs-2">
                        <i class="bi bi-exclamation-triangle text-warning"></i>
                        <h1 class="p-2 mt-auto fs-2">'.'Pegi '.$datas.'</h1>';
                                    
                        $specificationsRepository = new SpecificationsRepository;
                        $datas = $specificationsRepository->findPriceById(2);
                        echo '<div class="vr"></div>
                        <p class="p-2 fs-2"><br>
                        <h1 class="p-2 mt-auto fs-2">'.$datas.'</h1>';
                    ?>

                </div>
            </div>
            <div class="carousel-item">
                <img src="..\Images\Jeux\fallout-new-vegas.jpg" class="d-block w-100" alt="...">
                <div class="hstack gap-3">

                    <?php
                        $gameRepository = new GameRepository;
                        $datas = $gameRepository->findNameById(3);
                        echo '<h1 class="p-2 mt-auto fs-2">'.$datas.'</h1>';
                                    
                        $gameRepository = new GameRepository;
                        $datas = $gameRepository->findPegiById(3);
                        echo '<p class="p-2 mt-auto ms-auto fs-2">
                        <i class="bi bi-exclamation-triangle text-warning"></i>
                        <h1 class="p-2 mt-auto fs-2">'.'Pegi '.$datas.'</h1>';
                                    
                        $specificationsRepository = new SpecificationsRepository;
                        $datas = $specificationsRepository->findPriceById(3);
                        echo '<div class="vr"></div>
                        <p class="p-2 fs-2"><br>
                        <h1 class="p-2 mt-auto fs-2">'.$datas.'</h1>';
                    ?>

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
</section>

<section class="container-fluid mt-4 mb-2">
    <!-- Troisieme carrousel -->
<h1>Meilleurs ventes<i class="bi bi-caret-right text-warning"></i></h1>

<div id="carouselTendances" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="..\Images\Jeux\AC_Valhalla_panorama.jpg" class="d-block w-100" alt="...">
                <div class="hstack gap-3">

                    <?php
                        $gameRepository = new GameRepository;
                        $datas = $gameRepository->findNameById(1);
                        echo '<h1 class="p-2 mt-auto fs-2">'.$datas.'</h1>';
                                    
                        $gameRepository = new GameRepository;
                        $datas = $gameRepository->findPegiById(1);
                        echo '<p class="p-2 mt-auto ms-auto fs-2">
                        <i class="bi bi-exclamation-triangle text-warning"></i>
                        <h1 class="p-2 mt-auto fs-2">'.'Pegi '.$datas.'</h1>';
                                    
                        $specificationsRepository = new SpecificationsRepository;
                        $datas = $specificationsRepository->findPriceById(1);
                        echo '<div class="vr"></div>
                        <p class="p-2 fs-2"><br>
                        <h1 class="p-2 mt-auto fs-2">'.$datas.'</h1>';
                    ?>

                </div>
            </div>

            <div class="carousel-item">
                <img src="..\Images\Jeux\dark-souls-3.jpg" class="d-block w-100" alt="...">
                <div class="hstack gap-3">

                    <?php
                        $gameRepository = new GameRepository;
                        $datas = $gameRepository->findNameById(2);
                        echo '<h1 class="p-2 mt-auto fs-2">'.$datas.'</h1>';
                                    
                        $gameRepository = new GameRepository;
                        $datas = $gameRepository->findPegiById(2);
                        echo '<p class="p-2 mt-auto ms-auto fs-2">
                        <i class="bi bi-exclamation-triangle text-warning"></i>
                        <h1 class="p-2 mt-auto fs-2">'.'Pegi '.$datas.'</h1>';
                                    
                        $specificationsRepository = new SpecificationsRepository;
                        $datas = $specificationsRepository->findPriceById(2);
                        echo '<div class="vr"></div>
                        <p class="p-2 fs-2"><br>
                        <h1 class="p-2 mt-auto fs-2">'.$datas.'</h1>';
                    ?>

                </div>
            </div>
            <div class="carousel-item">
                <img src="..\Images\Jeux\fallout-new-vegas.jpg" class="d-block w-100" alt="...">
                <div class="hstack gap-3">

                    <?php
                        $gameRepository = new GameRepository;
                        $datas = $gameRepository->findNameById(3);
                        echo '<h1 class="p-2 mt-auto fs-2">'.$datas.'</h1>';
                                    
                        $gameRepository = new GameRepository;
                        $datas = $gameRepository->findPegiById(3);
                        echo '<p class="p-2 mt-auto ms-auto fs-2">
                        <i class="bi bi-exclamation-triangle text-warning"></i>
                        <h1 class="p-2 mt-auto fs-2">'.'Pegi '.$datas.'</h1>';
                                    
                        $specificationsRepository = new SpecificationsRepository;
                        $datas = $specificationsRepository->findPriceById(3);
                        echo '<div class="vr"></div>
                        <p class="p-2 fs-2"><br>
                        <h1 class="p-2 mt-auto fs-2">'.$datas.'</h1>';
                    ?>

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
</section>

<?php
require_once _ROOTPATH_ . '\templates\footer.php';
?>