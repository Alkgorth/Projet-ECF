<?php

namespace App\Controller;

use APP\Repository\GameController;

class GameController extends Controller
{
    public function route(): void
    {
        try {
            //on mes en place une condition pour lancer le bon controller
            if (isset($_GET['action'])) {
                switch ($_GET['action']) {
                    case 'show':
                        // Pour affihcer un jeu
                        $this->show();
                        break;
                    case 'list':
                        // Pour appler la méthode list(), tout les jeux
                        break;
                    case 'edit':
                        // Pour appler la méthode edit()
                        break;
                    case 'add':
                        // Pour appler la méthode add()
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

    // exemple d'appel depuis l'url
        // controller=book&action=show&id=1
    protected function show()
    {
        try {
            if (isset($_GET['id'])) {

                $id = (int)$_GET['id'];
                // Charger le jeu par un appel au repository
                $gameRepository = new GameRepository();
                $game = $gameRepository->findOneById($id);
                
                $this->render('game/show', [
                    'game' => $game
                    
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
}