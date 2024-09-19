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
                        // charger controller home
                        $this->mdpOublie();
                        break;
                    default:
                        throw new \Exception("Cette action n'existe pas : ".$_GET['action']);
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
        // controller=page&action=about
    protected function connexion()
    {
        $this->render('connexions/connexion', [

        ]);
        
    }

    // exemple d'appel depuis l'url
        // controller=page&action=home
    protected function mdpOublie()
    {
      
        $this->render('connexions/mdpOublie', [

        ]);
        
    }
    
}

?>