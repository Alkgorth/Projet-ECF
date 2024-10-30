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

  <section class="cards row d-flex justify-content-center">
    <h2 class="text-white m-3 ms-4">Les Promotions
      <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#FFB600" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
        <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
      </svg>
    </h2>
    <!-- Première Card -->
    <?php foreach ($games as $game) { ?>
      <div class="card col-sm-6 mb-3 mb-sm-0 py-2">
        <a href="index.php?controller=games&action=jeuxDetail&id=<?= $game['id'] ?>" id="jeu_promo" class="text-decoration-none text-white">
          <img src="..\assets\images\Jeux\GodFall_panorama.jpg" class="card-img-top" alt="<?= $game['name'] ?>">
        </a>
        <div class="card-body hstack gap-4">
          <h5 class="card-title"><?= $game['name'] ?></h5>
          <p class="card-text"><?= $game['plateforme_name'] ?></p>
          <p class="card-text"><i class="bi bi-exclamation-triangle text-warning pe-2"></i><?= $game['pegi_name'] ?></p>
          <p class="card-text"><?= $game['specification_price'] ?></p>
          <p class="card-text"><?= $game['promo'] ?></p>
          <a href="#" class="btn btn-primary">Ajouter au panier</a>
        </div>
      </div>
    <?php } ?>
  </section>
</main>

<?php

require_once _ROOTPATH_ . '\templates\footer.php';

?>