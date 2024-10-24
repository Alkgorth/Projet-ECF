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
        $query->bindValue(':id', $id, $this->pdo::PARAM_INT);
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
                                        adresse = :adresse, zip_code = :zip_code, city = :city, password = :password, fk_id_store = :fk_id_store
                                        WHERE id = :id"
            );
            $query->bindValue(':id', $user->getIdUser(), $this->pdo::PARAM_INT);
        } else {
            $query = $this->pdo->prepare(
                "INSERT INTO app_user (last_name, first_name, mail, adresse, zip_code, city, password, role, fk_id_store)
                                        VALUES (:last_name, :first_name, :mail, :adresse, :zip_code, :city, :password, :role, :fk_id_store)"
            );
            $query->bindValue(':role', $user->getRole(), $this->pdo::PARAM_STR);
        }

        $query->bindValue(':last_name', $user->getLastName(), $this->pdo::PARAM_STR);
        $query->bindValue(':first_name', $user->getFirstName(), $this->pdo::PARAM_STR);
        $query->bindValue(':mail', $user->getMail(), $this->pdo::PARAM_STR);
        $query->bindValue(':adresse', $user->getAdresse(), $this->pdo::PARAM_STR);
        $query->bindValue(':zip_code', $user->getZipCode(), $this->pdo::PARAM_INT);
        $query->bindValue(':city', $user->getCity(), $this->pdo::PARAM_STR);
        $query->bindValue(':password', password_hash($user->getPassword(), PASSWORD_DEFAULT), $this->pdo::PARAM_STR);
        $query->bindValue(':fk_id_store', $user->getFkIdStore(), $this->pdo::PARAM_INT);

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
        $query = $this->pdo->prepare('SELECT * FROM app_user WHERE mail = :mail');

        $query->bindValue(':mail', $mail, $this->pdo::PARAM_STR);

        $query->execute();

        $user = $query->fetch($this->pdo::FETCH_ASSOC);

        return $user;
    }
}
