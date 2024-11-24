<?php

// indique où ce situe le fichier
namespace App\Repository;

use App\Db\Mysql;
use App\Entity\Game;
use App\Entity\User;
use App\Entity\Token as TableToken;
use App\Tools\Security;
use App\Tools\UserValidator;
use App\Tools\Token;
use DateInterval;
use DateTime;

class UserRepository extends MainRepository
{
    public function findOneById(int $id)
    {
        // requête qui récupère l'utilisateur
        $query = $this->pdo->prepare("SELECT * FROM app_user WHERE id_user = :id");
        $query->bindValue(':id', $id, $this->pdo::PARAM_INT);
        $query->execute();
        $user = $query->fetch($this->pdo::FETCH_ASSOC);
        if ($user) {
            return User::createAndHydrate($user);
        } else {
            return false;
        }
    }

    public function findUserByMail(string $mail)
    {
        if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            return false;
        }
        $query = $this->pdo->prepare('SELECT * FROM app_user WHERE mail = :mail');

        $query->bindValue(':mail', htmlspecialchars($mail), $this->pdo::PARAM_STR);

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

        $query->bindValue(':last_name', htmlspecialchars($user->getLastName()), $this->pdo::PARAM_STR);
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

    public function forgottenPassword(User $user, string $tokenValue)
    {

        $idUser = $user->getIdUser();

        $query = $this->pdo->prepare('SELECT * FROM tokens WHERE fk_id_user = :fk_id_user');

        $query->bindValue(':fk_id_user', $idUser, $this->pdo::PARAM_INT);

        $query->execute();

        $existingToken = $query->fetch($this->pdo::FETCH_ASSOC);

        $expirationDateTime = new DateTime();
        $expirationDateTime->add(new DateInterval('PT1H'));

        if ($existingToken) {
            $request =
                "UPDATE tokens SET creation_date = NOW(), token = :token, expiration_date = :expiration_date WHERE fk_id_user = :fk_id_user";
        } else {
            $request =
                "INSERT INTO tokens (creation_date, token, expiration_date, fk_id_user) VALUES (NOW(), :token, :expiration_date, :fk_id_user)";
        }

        $query = $this->pdo->prepare($request);

        $query->bindValue(':token', $tokenValue, $this->pdo::PARAM_STR);
        $query->bindValue(':expiration_date', $expirationDateTime->format('Y-m-d H:i:s'), $this->pdo::PARAM_STR);
        $query->bindValue(':fk_id_user', $idUser, $this->pdo::PARAM_INT);

        $query->execute();
        $newToken = [
            'creation_date' => date('Y-m-d H:i:s'),
            'token' => $tokenValue,
            'expiration_date' => $expirationDateTime->format('Y-m-d H:i:s'),
            'fk_id_user' => $idUser
        ];

        return TableToken::createAndHydrate($newToken);
    }

    public function updatePassword(User $user)
    {
        if ($user->getIdUser() !== null) {
            $query = $this->pdo->prepare('UPDATE app_user SET password = :password WHERE id_user = :id');
        } else {
            throw new \Exception("Aucun utilisateur rattaché à ce mail.");
        }

        $query->bindValue(':id', $user->getIdUser(), $this->pdo::PARAM_INT);
        $query->bindValue(':password', htmlspecialchars(password_hash($user->getPassword(), PASSWORD_DEFAULT)), $this->pdo::PARAM_STR);

        return $query->execute();
    }
}
