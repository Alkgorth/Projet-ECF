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
            try {
                $error = [];
    
                $user = new User();
    
                if(isset($_POST['saveUser'])) {
                    $user->hydrate($_POST);
                    $user->setRole('user');
                    $error = UserValidator::validate($user);
                    
                    if(empty($error)) {
                        $userRepository = new UserRepository();
                        $userRepository->persist($user);
    
                        header('Location: index.php?controller=connexions&action=connexion');
                    }
                }
                
                $this->render('admin/adminCreationArticle', [
                    
                ]);
    
            } catch (\Exception $e) {
                $this->render('errors/default', [
                    'error' => $e->getMessage()
                ]);
            }
        }
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
