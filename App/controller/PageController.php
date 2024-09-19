<?php

namespace App\Controller;

class PageController extends Controller
{
    public function route(): void
    {
        try {
             //on mes en place une condition pour lancer le bon controller
            if (isset($_GET['action'])) {
                switch ($_GET['action']) {
                    case 'about':
                        // On appelLe la méthode about() qui est plus bas
                        $this->about();
                        break;
                    case 'home':
                        // charger controller home
                        $this->home();
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
    protected function about()
    {
        $this->render('page/about', [

        ]);
        
    }

    // exemple d'appel depuis l'url
        // controller=page&action=home
    protected function home()
    {
      
        $this->render('page/home', [

        ]);
        
    }
    
}

?>