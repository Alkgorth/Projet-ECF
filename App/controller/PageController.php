<?php

namespace App\Controller;

use App\Repository\GameRepository;
use App\Repository\UserRepository;
use App\Entity\User;
use App\Tools\UserValidator;


class PageController extends Controller
{
    
    public function route(): void
    {
        try {
            //on mes en place une condition pour lancer le bon controller
            if (isset($_GET['action'])) {
                switch ($_GET['action']) {
                    case 'home':
                        $this->home();
                        break;
                    case 'creationCompte':
                        $this->creationCompte();
                        break;
                    case 'espacePersonnel':
                        $this->espacePersonnel();
                        break;
                    case 'panier':
                        $this->panier();
                        break;
                    default:
                        throw new \Exception("Cette action n'existe pas : " . $_GET['action']);
                        break;
                }
            } else {
                throw new \Exception("Aucune action détectée");
            }
        } catch (\Exception $e) {
            $this->render('errors/default', [
                'error' => $e->getMessage()
            ]);
        }
    }

    // exemple d'appel depuis l'url
    // controller=page&action=home
    protected function home()
    {
        $gameRepository = new GameRepository();
        $game = $gameRepository->homeDisplay();

        $this->render('pages/home', [
            'games' => $game
        ]);
    }

    // exemple d'appel depuis l'url
    // controller=page&action=about
    protected function creationCompte()
    {
        try {
            $errors = [];

            $user = new User();

            if(isset($_POST['saveUser'])) {
                $user->hydrate($_POST);
                $user->setRole(ROLE_USER);
                $errors = UserValidator::validate();

                if(empty($errors)) {
                    $userCreaRepository = new UserRepository();
                    $userCreaRepository->persist($user);

                    header('Location: index.php?controller=connexions&action=connexion');
                }
            }
            
            $this->render('pages/creationCompte', [
                'user' => '',
                'creationCompte' => 'Créer mon compte',
                'errors' => $errors
            ]);

        } catch (\Exception $e) {
            $this->render('errors/default', [
                'errors' => $e->getMessage()
            ]);
        }
    }


    protected function espacePersonnel()
    {

        $this->render('pages/espacePersonnel', []);
    }

    protected function panier()
    {
        $this->render('pages/panier', []);
    }
}

