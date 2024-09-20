<?php

require_once _ROOTPATH_ . '\templates\head.php';
require_once _ROOTPATH_ . '\templates\header.php';


?>

<main>
        <section>
            <div class="menuPlateform">
                <ul class="filtrePlateform">
                    <li><a href="#" class="consoles">PC</a></li>
                    <span class="separat">|</span>
                    <li><a href="#" class="consoles">Playstation</a></li>
                    <span class="separat">|</span>
                    <li><a href="#" class="consoles">X-box</a></li>
                    <span class="separat">|</span>
                    <li><a href="#" class="consoles">Nintendo</a></li>
                    <span class="separat">|</span>
                    <li class="consoles">+ de filtres</li>
                </ul>
            </div>
        </section>

        <!-- Cards jeux -->
        <h2>Les Promotions<i class="fa-solid fa-angle-right"></i></h2>
        <section class="cards">
            <!-- Première Card -->
            <div class="card">
                <img src="../Images/Jeux/AC Valhalla panorama.jpg" class="card-img-top" alt="AC Valhalla">
                <div class="card-body">
                  <h5 class="card-title">Assassin's Creed Valhalla</h5>
                  <p class="card-text"><i class="fa-solid fa-triangle-exclamation"></i>+18</p>
                  <p class="card-text">69€99</p>
                  <a href="#" class="btn btn-primary">Ajouter au panier</a>
                </div>
              </div>

              <!-- Seconde Card -->
              <div class="card">
                <img src="../Images/Jeux/dark-souls-3.jpg" class="card-img-top" alt="Dark Souls 3">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Ajouter au panier</a>
                </div>
              </div>

              <!-- Troisième Card -->
              <div class="card">
                <img src="../Images/Jeux/fallout-new-vegas.jpg" class="card-img-top" alt="Dark Souls 3">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Ajouter au panier</a>
                </div>
              </div>
        </section>

        <!-- Choix de page -->
         <div class="pages">
            <span>
                1 <i class="fa-solid fa-angle-right"></i>
            </span>
        </div>
    </main>

<?php

require_once _ROOTPATH_ . '\templates\footer.php';

?>