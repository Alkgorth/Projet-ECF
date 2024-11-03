<?php

namespace App\Controller;

use App\Repository\GameRepository;
use App\Repository\UserRepository;
use App\Entity\User;
use App\Tools\UserValidator;
use App\Tools\Security;


class UserController extends Controller
{

    public function route(): void
    {
        try {
            //on mes en place une condition pour lancer le bon controller
            if (isset($_GET['action'])) {
                switch ($_GET['action']) {
                    case 'home':
                        $this->home();
                        break;
                    case 'creationCompte':
                        $this->creationCompte();
                        break;
                    case 'espacePersonnel':
                        $this->espacePersonnel();
                        break;
                    case 'panier':
                        $this->panier();
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

    // controller=page&action=home
    protected function home()
    {
        $gameRepository = new GameRepository();
        $game = $gameRepository->homeDisplay();

        $this->render('pages/home', [
            'games' => $game
        ]);
    }

    // controller=page&action=creationCompte
    protected function creationCompte()
    {
        try {
            $error = [];

            $user = new User();

            if (isset($_POST['saveUser'])) {
                $user->hydrate($_POST);
                $user->setRole('user');
                $error = UserValidator::validate($user);

                var_dump($user->getMail());

                if (empty($error)) {
                    $userRepository = new UserRepository();
                    $userRepository->persist($user);

                    Security::mailCreateUser($user->getLastName(), $user->getFirstName(), $user->getMail());

                    header('Location: index.php?controller=connexions&action=connexion');
                }
            }



            $this->render('pages/creationCompte', [
                'user' => '',
                'creationCompte' => 'Créer mon compte',
                'error' => $error
            ]);
        } catch (\Exception $e) {
            $this->render('errors/default', [
                'error' => $e->getMessage()
            ]);
        }
    }

    // controller=page&action=espacePersonnel
    protected function espacePersonnel()
    {
        try {

            $error = [];
            $affichage = "Vos informations ont bien été modifiées";

            if (!isset($_SESSION['user'])) {
                header('Location: index.php?controller=connexions&action=connexion');
            }

            if (isset($_POST['saveUser'])) {

                $user = new User();
                $user->hydrate($_POST);
                $user->setIdUser($_SESSION['user']['id']);
                $user->setRole($_SESSION['user']['role']);
                $error = UserValidator::validate($user);

                if (empty($error)) {
                    $userRepository = new UserRepository();
                    $userRepository->persist($user);

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
                }
            }

            if (isset($_POST['delete'])) {
                $userRepository = new UserRepository();
                $userRepository->delete($_SESSION['user']['id']);
                session_destroy();
                header('Location: index.php?controller=pages&action=home');
            }

            $this->render('pages/espacePersonnel', [
                'affichage' => $affichage,
                'error' => $error
            ]);
        } catch (\Exception $e) {
            $this->render('errors/default', [
                'error' => $e->getMessage()
            ]);
        }
    }

    protected function panier()
    {
        $this->render('pages/panier', []);
    }
}
