<?php

namespace App\Controller;

class ConnexionsController extends Controller
{
    public function route(): void
    {
        try {
            //on mes en place une condition pour lancer le bon controller
            if (isset($_GET['action'])) {
                switch ($_GET['action']) {
                    case 'connexion':
                        // On appelLe la méthode connexion() qui est plus bas
                        $this->connexion();
                        break;
                    case 'mdpOublie':
                        $this->mdpOublie();
                        break;
                    case 'mdpReinitialise':
                        $this->mdpReinitialise();
                        break;
                    case 'reinitialiserMdp':
                        $this->reinitialiserMdp();
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


    protected function connexion()
    {
        $this->render('connexions/connexion', []);
    }

    protected function mdpOublie()
    {
        $this->render('connexions/mdpOublie', []);
    }

    protected function mdpReinitialise()
    {
        $this->render('connexions/mdpReinitialise', []);
    }

    protected function reinitialiserMdp()
    {
        $this->render('connexions/reinitialiserMdp', []);
    }
}
