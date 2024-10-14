<?php

// indique où ce situe le fichier
namespace App\Repository;

use App\Db\Mysql;
use App\Entity\Game;

class UserCreaRepository extends MainRepository
{
    public function createUser(string $email, string $password, string $pseudo)
    {
        $query = $this->pdo->prepare('INSERT INTO user (email, password, pseudo) VALUES (:email, :password, :pseudo)');

        $query->bindParam(':email', $email, $this->pdo::PARAM_STR);
        $query->bindParam(':password', $password, $this->pdo::PARAM_STR);
        $query->bindParam(':pseudo', $pseudo, $this->pdo::PARAM_STR);

        $query->execute();
    }
}