<?php

namespace App\Controller;

use App\Repository\GameRepository;

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
        $this->render('pages/creationCompte', []);
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

