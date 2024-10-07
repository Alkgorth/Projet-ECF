<?php

namespace App\Controller;

use APP\Repository\GameRepository;
use APP\Repository\SpecificationsRepository;

class GameController extends Controller
{
    public function route(): void
    {
        try {
            //on mes en place une condition pour lancer le bon controller
            if (isset($_GET['action'])) {
                switch ($_GET['action']) {
                    case 'jeuxDetail':
                        // Pour afficher un jeu
                        $this->jeuxDetail($_GET['id']);
                        break;
                    case 'jeuxGlobal':
                        // Pour appler la méthode list(), tout les jeux
                        $this->jeuxGlobal();
                        break;
                    case 'promos':
                        $this->promos();
                        break;
                    case 'derniersArrive':
                        $this->derniersArrive();
                        break;
                    case 'delete':
                        // Pour appler la méthode delete()
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

    protected function jeuxDetail()
    {
        $id = $_GET['id'];

        try {
            if (isset($_GET['id'])) {

                
                // Charger le jeu par un appel au repository
                $gameRepository = new GameRepository();
                $gameDetail = $gameRepository->findDetail($_GET['id']);

                $this->render('games/jeuxDetail', [
                    'gamesDetails' => $gameDetail

                ]);
            } else {
                throw new \Exception("L'id est manquant en paramètre");
            }
        } catch (\Exception $e) {
            $this->render('errors/default', [
                'error' => $e->getMessage()
            ]);
        }
    }


    protected function jeuxGlobal()
    {
        $this->render('games/jeuxGlobal', []);
    }

    protected function promos()
    {
        $this->render('games/promos', []);
    }

    protected function derniersArrive()
    {
        $this->render('games/derniersArrive', []);
    }
}
