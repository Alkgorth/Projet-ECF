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

        
            $error = [];

            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['connexion'])) {
                if (isset($_POST['mail']) && isset($_POST['password'])) {
                    $mail = $_POST['mail'];
                    $password = $_POST['password'];
                    
                    $userRepo = new UserRepository();
                    $user = $userRepo->findUserByMail($mail);
            
                    if ($user && Security::verifyPassword($password, $user->getPassword())) {
                        session_regenerate_id(true);
                        echo "Connexion réussie premier message";
                        var_dump($_SESSION['user']);
                        $_SESSION['user'] = [
                            'id' => $user->getIdUser(),
                            'mail' => $user->getMail(),
                            'last_name' => $user->getLastName(),
                            'first_name' => $user->getFirstName(),
                            'adresse' => $user->getAdresse(),
                            'zip_code' => $user->getZipCode(),
                            'city' => $user->getCity(),
                            'fk_id_store' => $user->getFkIdStore(),
                            'role' => $user->getRole()
                        ];
                        echo "Connexion réussie deuxieme message";
                        header('Location: index.php?controller=pages&action=espacePersonnel');
                    } else {
                        echo "Identifiant ou mot de passe incorrect";
                        $error[] = "Identifiant ou mot de passe incorrect";
                    }
                }
            }
            $this->render('connexions/connexion', [
                'user' => $user,
                'error' => $error
            ]);
       
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
