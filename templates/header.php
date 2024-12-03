<?php

use App\Tools\Navigation;
use App\Tools\Security;
use App\Tools\UserValidator;

?>
<header>

  <nav class="navbar navbar-expand-lg bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="../index.php">
        <img src="..\assets\images\Logo GameStore-2.png" alt="Logo" class="align-text-top ms-2" width=70>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse ms-auto justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php?controller=pages&action=panier"><i class="bi bi-cart-plus fs-2 px-4"></i></a>
          </li>
          <li class="nav-item dropdown">
            <?php if (UserValidator::isUser()) { ?>
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-person-circle fs-2"></i></a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="index.php?controller=pages&action=espacePersonnel">Profil</a></li>
                <li><a class="dropdown-item" href="index.php?controller=pages&action=panier">Panier</a></li>
                <li><a class="dropdown-item" href="index.php?controller=connexions&action=deconnexion">Déconnexion</a></li>
              </ul>
              <?php } elseif (UserValidator::isAdmin()) { ?>
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-person-circle fs-2"></i></a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="index.php?controller=admin&action=adminAccueil">Accueil administrateur</a></li>
                <li><a class="dropdown-item" href="index.php?controller=admin&action=adminCreationArticle">Création d'un article</a></li>
                <li><a class="dropdown-item" href="index.php?controller=admin&action=gestionStocks">Gestion des stocks</a></li>
                <li><a class="dropdown-item" href="index.php?controller=admin&action=creationEmploye">Création d'un employé</a></li>
                <li><a class="dropdown-item" href="index.php?controller=connexions&action=deconnexion">Déconnexion</a></li>
              </ul>
            <?php } else { ?>
            <a href="/index.php?controller=connexions&action=connexion" class="btn btn-outline-secondary me-2 mx-2 
                <?= Navigation::addActiveClass('connexions', 'connexion') ?>">Connexion</a>
            <a href="/index.php?controller=pages&action=creationCompte" class="btn btn-outline-secondary me-2 mx-2 
                <?= Navigation::addActiveClass('pages', 'creationCompte') ?>">Inscription</a>
            <?php } ?>
          </li>

          <li class="nav-item dropdown">
           
          </li>

          <li class="nav-item">
            <form class="d-flex nav-link" role="search">
              <input class="form-control me-2" type="search" placeholder="Rechercher" aria-label="Search">
              <button class="btn btn-outline-dark" type="submit">Rechercher</button>
            </form>
          </li>
        </ul>
      </div>
    </div>
  </nav>

</header>