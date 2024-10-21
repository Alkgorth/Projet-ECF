<?php

// indique où ce situe le fichier
namespace App\Repository;

use App\Db\Mysql;
use App\Entity\Game;
use App\Entity\User;

class UserRepository extends MainRepository
{
    public function findOneById(int $id)
    {
        // requête qui récupère l'utilisateur
        $query = $this->pdo->prepare("SELECT * FROM app_user WHERE id = :id");
        $query->bindParam(':id', $id, $this->pdo::PARAM_STR);
        $query->execute();
        $user = $query->fetch($this->pdo::FETCH_ASSOC);
        if ($user) {
            return User::createAndHydrate($user);
        } else {
            return false;
        }
    }

    public function persist(User $user)
    {
        // requête qui insère l'utilisateur
        if ($user->getIdUser() !== null) {
            $query = $this->pdo->prepare(
                "UPDATE app_user SET last_name = :last_name, first_name = :first_name, mail = :mail,
                                        adresse = :adresse, zip_code = :zip_code, city = :city, password = :password, role = :role
                                        WHERE id = :id"
            );
            $query->bindParam(':id', $user->getIdUser(), $this->pdo::PARAM_INT);
        } else {
            $query = $this->pdo->prepare(
                "INSERT INTO app_user (last_name, first_name, mail, adresse, zip_code, city, password, role)
                                        VALUES (:last_name, :first_name, :mail, :adresse, :zip_code, :city, :password, :role)"
            );
            $query->bindParam(':role', $user->getRole(), $this->pdo::PARAM_STR);
        }

        $query->bindParam(':last_name', $user->getLastName(), $this->pdo::PARAM_STR);
        $query->bindParam(':first_name', $user->getFirstName(), $this->pdo::PARAM_STR);
        $query->bindParam(':mail', $user->getMail(), $this->pdo::PARAM_STR);
        $query->bindParam(':adresse', $user->getAdresse(), $this->pdo::PARAM_STR);
        $query->bindParam(':zip_code', $user->getZipCode(), $this->pdo::PARAM_STR);
        $query->bindParam(':city', $user->getCity(), $this->pdo::PARAM_STR);
        $query->bindParam(':password', password_hash($user->getPassword(), PASSWORD_DEFAULT), $this->pdo::PARAM_STR);

        return $query->execute();
    }

    /**
     * if (!empty($_POST)) {
    *         if (isset(
    *             $_POST['last_name'],
    *             $_POST['first_name'],
    *             $_POST['adresse'],
    *             $_POST['mail'],
    *             $_POST['zip_code'],
    *             $_POST['password'],
    *             $_POST['passwordConfirm']
    *           )
    *           && !empty($_POST['last_name'])
    *           && !empty($_POST['first_name'])
    *           && !empty($_POST['adresse'])
    *           && !empty($_POST['mail'])
    *           && !empty($_POST['zip_code'])
    *           && !empty($_POST['password'])
    *           && !empty($_POST['passwordConfirm'])
    *       ) {
    *       $last_name = htmlspecialchars(trim($_POST['last_name']));
    *       $first_name = htmlspecialchars(trim($_POST['first_name']));
    *       } else {
    *       $errors[] = "Veuillez remplir tous les champs";
    *       }
    *   }
    *}
     * 
     */



    public function findUser(string $mail)
    {
        $query = $this->pdo->prepare('SELECT * FROM user WHERE mail = :mail');

        $query->bindParam(':mail', $mail, $this->pdo::PARAM_STR);

        $query->execute();

        $user = $query->fetch($this->pdo::FETCH_ASSOC);

        return $user;
    }
}
