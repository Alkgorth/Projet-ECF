<?php

namespace App\Controller;

class AdminController extends Controller
{
    public function route(): void
    {
        try {
             //on mes en place une condition pour lancer le bon controller
            if (isset($_GET['action'])) {
                switch ($_GET['action']) {
                    case 'adminAccueil':
                        // On appelLe la méthode about() qui est plus bas
                        $this->adminAccueil();
                        break;
                    case 'adminCreationArticle':
                        // charger controller home
                        $this->adminCreationArticle();
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
    protected function adminAccueil()
    {
        $this->render('admin/adminAccueil', [

        ]);
        
    }

    // exemple d'appel depuis l'url
        // controller=page&action=home
    protected function adminCreationArticle()
    {
      
        $this->render('admin/adminCreationArticle', [

        ]);
        
    }
    
}

?>