<?php

require_once _ROOTPATH_ . '\templates\head.php';
require_once _ROOTPATH_ . '\templates\header.php';

use App\Repository\GameRepository;
use App\Repository\SpecificationsRepository;

?>

<main>
      <section>
          <!-- Barre du menu plateformes -->
          <div>
              <nav class="nav nav-pills nav-fill flex-column flex-sm-row">
                  <a class="flex-sm-fill text-sm-center nav-link active fs-3" aria-current="page" href="#">PC</a>
                  <div class="vr text-white"></div>
                  <a class="flex-sm-fill text-sm-center nav-link text-white fs-3" href="#">Playstation</a>
                  <div class="vr text-white"></div>
                  <a class="flex-sm-fill text-sm-center nav-link text-white fs-3" href="#">Xbox</a>
                  <div class="vr text-white"></div>
                  <a class="flex-sm-fill text-sm-center nav-link text-white fs-3" aria-disabled="true">Nintendo</a>
                  <div class="vr text-white"></div>
                  <a class="flex-sm-fill text-sm-center nav-link text-white fs-3" aria-disabled="true">+ de filtres</a>

              </nav>

          </div>
      </section>

        <!-- Cards jeux -->
        <h2>Derniers Arrivés<i class="fa-solid fa-angle-right"></i></h2>
        <section class="container cards row d-flex justify-content-center">
          
            <!-- Première Card -->
            <div class="card col-sm-6 mb-3 mb-sm-0 py-2">
                <img src="../Images/Jeux/AC_Valhalla_panorama.jpg" class="card-img-top" alt="AC Valhalla">
                <div class="card-body">
                  
                    <?php
                      $gameRepository = new GameRepository;
                      $datas = $gameRepository->findNameById(1);
                      echo '<h5 class="card-title">'.$datas.'</h5>';
                    
                      $gameRepository = new GameRepository;
                      $datas = $gameRepository->findPegiById(1);
                      echo '<p class="card-text"><i class="bi bi-exclamation-triangle text-warning pe-2"></i>'.'Pegi '.$datas.'</p>';
                    
                      $specificationsRepository = new SpecificationsRepository;
                      $datas = $specificationsRepository->findPriceById(1);
                      echo '<p class="card-text">'.$datas.'</p>';
                    ?>
                  
                  <a href="#" class="btn btn-primary">Ajouter au panier</a>
                </div>
              </div>

              <!-- Seconde Card -->
              <div class="card col-sm-6 mb-3 mb-sm-0">
                <img src="../Images/Jeux/dark-souls-3.jpg" class="card-img-top" alt="Dark Souls 3">
                <div class="card-body">

                    <?php
                        $gameRepository = new GameRepository;
                        $datas = $gameRepository->findNameById(2);
                        echo '<h5 class="card-title">'.$datas.'</h5>';
                      
                        $gameRepository = new GameRepository;
                        $datas = $gameRepository->findPegiById(2);
                        echo '<p class="card-text"><i class="bi bi-exclamation-triangle text-warning pe-2"></i>'.'Pegi '.$datas.'</p>';
                      
                        $specificationsRepository = new SpecificationsRepository;
                        $datas = $specificationsRepository->findPriceById(2);
                        echo '<p class="card-text">'.$datas.'</p>';
                    ?>
                 
                  <a href="#" class="btn btn-primary">Ajouter au panier</a>
                </div>
              </div>

              <!-- Troisième Card -->
              <div class="card col-sm-6 mb-3 mb-sm-0">
                <img src="../Images/Jeux/fallout-new-vegas.jpg" class="card-img-top" alt="Dark Souls 3">
                <div class="card-body">

                    <?php
                        $gameRepository = new GameRepository;
                        $datas = $gameRepository->findNameById(3);
                        echo '<h5 class="card-title">'.$datas.'</h5>';
                      
                        $gameRepository = new GameRepository;
                        $datas = $gameRepository->findPegiById(3);
                        echo '<p class="card-text"><i class="bi bi-exclamation-triangle text-warning pe-2"></i>'.'Pegi '.$datas.'</p>';
                      
                        $specificationsRepository = new SpecificationsRepository;
                        $datas = $specificationsRepository->findPriceById(3);
                        echo '<p class="card-text">'.$datas.'</p>';
                    ?>

                  <a href="#" class="btn btn-primary">Ajouter au panier</a>
                </div>
              </div>

              <!-- Quatrième Card -->
              <div class="card col-sm-6 mb-3 mb-sm-0">
                <img src="..\images\Jeux\Elden_Ring.jpeg" class="card-img-top" alt="Dark Souls 3">
                <div class="card-body">

                    <?php
                        $gameRepository = new GameRepository;
                        $datas = $gameRepository->findNameById(4);
                        echo '<h5 class="card-title">'.$datas.'</h5>';
                      
                        $gameRepository = new GameRepository;
                        $datas = $gameRepository->findPegiById(4);
                        echo '<p class="card-text"><i class="bi bi-exclamation-triangle text-warning pe-2"></i>'.'Pegi '.$datas.'</p>';
                      
                        $specificationsRepository = new SpecificationsRepository;
                        $datas = $specificationsRepository->findPriceById(4);
                        echo '<p class="card-text">'.$datas.'</p>';
                    ?>

                  <a href="#" class="btn btn-primary">Ajouter au panier</a>
                </div>
              </div>
        </section>

        <!-- Choix de page -->
         <div class="pages">
            <span>
                 <i class="fa-solid fa-angle-right"></i>
            </span>
        </div>
    </main>

<?php

require_once _ROOTPATH_ . '\templates\footer.php';

?>