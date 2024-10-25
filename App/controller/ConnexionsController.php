<?php

namespace App\Controller;

use App\Repository\UserRepository;
use App\Tools\Security;

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
        
        try {
            $error = [];

            if ($_SERVER['REQUEST_METHOD'] === 'POST' && ($_POST['connexion'])) {
                if (isset($_POST['mail']) && isset($_POST['password'])) {
                    $mail = $_POST['mail'];
                    $password = $_POST['password'];
    
                    $user = new UserRepository();
                    $user = $user->findUserByMail($mail);
    
                    if ($user) {
                        if ($user && Security::Loggin($password, $user['password'])) {
                            header('Location: index.php?controller=pages&action=espacePersonnel');
                            return true;
                        }
                    }
                }
                $error[] = "Identifiant ou mot de passe incorrect";
            }
            $this->render('connexions/connexion', [
                'user' => $user,
                'error' => $error
            ]);

        } catch (\Exception $e) {
            $this->render('errors/default', [
                'error' => $e->getMessage()
            ]);
            
        }
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
