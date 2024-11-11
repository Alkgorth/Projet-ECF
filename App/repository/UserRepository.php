<?php

// indique où ce situe le fichier
namespace App\Repository;

use App\Db\Mysql;
use App\Entity\Game;
use App\Entity\User;
use App\Tools\Security;
use App\Tools\UserValidator;

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
            // return User::createAndHydrate($user);
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
                                        WHERE id_user = :id"
            );
            $query->bindValue(':id', $user->getIdUser(), $this->pdo::PARAM_INT);
        } else {
            $query = $this->pdo->prepare(
                "INSERT INTO app_user (last_name, first_name, mail, adresse, zip_code, city, password, role, fk_id_store)
                                        VALUES (:last_name, :first_name, :mail, :adresse, :zip_code, :city, :password, :role, :fk_id_store)"
            );
            $query->bindValue(':role', $user->getRole(), $this->pdo::PARAM_STR);
        }

        $query->bindValue(':last_name', htmlspecialchars( $user->getLastName()), $this->pdo::PARAM_STR);
        $query->bindValue(':first_name', htmlspecialchars($user->getFirstName()), $this->pdo::PARAM_STR);
        $query->bindValue(':mail', htmlspecialchars($user->getMail()), $this->pdo::PARAM_STR);
        $query->bindValue(':adresse', htmlspecialchars($user->getAdresse()), $this->pdo::PARAM_STR);
        $query->bindValue(':zip_code', htmlspecialchars($user->getZipCode()), $this->pdo::PARAM_INT);
        $query->bindValue(':city', htmlspecialchars($user->getCity()), $this->pdo::PARAM_STR);
        $query->bindValue(':password', htmlspecialchars(password_hash($user->getPassword(), PASSWORD_DEFAULT)), $this->pdo::PARAM_STR);
        $query->bindValue(':fk_id_store', htmlspecialchars($user->getFkIdStore()), $this->pdo::PARAM_INT);

        return $query->execute();

    }

    public function delete(int $id)
    {
        // requête qui supprime l'utilisateur
        $query = $this->pdo->prepare("DELETE FROM app_user WHERE id_user = :id");
        $query->bindValue(':id', $id, $this->pdo::PARAM_INT);
        return $query->execute();
    }

    public function findUserByMail(string $mail)
    {
        if(!filter_var($mail, FILTER_VALIDATE_EMAIL)){
            return false;
        }
        $query = $this->pdo->prepare('SELECT * FROM app_user WHERE mail = :mail');

        $query->bindValue(':mail', $mail, $this->pdo::PARAM_STR);

        $query->execute();

        $user = $query->fetch($this->pdo::FETCH_ASSOC);

        if($user){
            return User::createAndHydrate($user);
        } else {
            return false;
        }
    }

    public function forgottenPassword(User $user) {

        if($user->getIdUser() !== null){
            $query = $this->pdo->prepare('UPDATE tokens SET token = $token, date_time = NOW() WHERE fk_id_user = id_user');
        }
    }
}
