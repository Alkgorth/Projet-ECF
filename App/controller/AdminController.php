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
                        $this->adminAccueil();
                        break;
                    case 'adminCreationArticle':
                        $this->adminCreationArticle();
                        break;
                    case 'jeuxPlateformes':
                        $this->jeuxPlateformes();
                        break;
                    case 'jeuxMagasins':
                        $this->jeuxMagasins();
                        break;
                    case 'creationEmploye':
                        $this->creationEmploye();
                        break;
                    case 'espaceEmploye':
                        $this->espaceEmploye();
                        break;
                    case 'gestionStocks':
                        $this->gestionStocks();
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


    protected function adminAccueil()
    {
        $this->render('admin/adminAccueil', []);
    }

    protected function adminCreationArticle()
    {
        $error = [];
        

        $this->render('admin/adminCreationArticle', [
            'error' => $error
        ]);
    }

    protected function jeuxPlateformes()
    {

        $this->render('admin/jeuxPlateformes', []);
    }

    protected function jeuxMagasins()
    {

        $this->render('admin/jeuxMagasins', []);
    }

    protected function creationEmploye()
    {

        $this->render('admin/creationEmploye', []);
    }

    protected function espaceEmploye()
    {

        $this->render('admin/espaceEmploye', []);
    }

    protected function gestionStocks()
    {

        $this->render('admin/gestionStocks', []);
    }
}
