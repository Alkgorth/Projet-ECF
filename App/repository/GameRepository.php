<?php

// indique où ce situe le fichier
namespace App\Repository;


use App\Entity\Game;
use App\Db\Mysql;
use App\Tools\StringTools;

class GameRepository
{
    public function findOneById(int $id)
    {
        // Appel de la bdd
        $mysql = Mysql::getInstance();
        $pdo = $mysql->getPDO();


        $query = $pdo->prepare('SELECT * FROM games WHERE id_jeu = :id');
        $query->bindValue(':id', $id, $pdo::PARAM_INT);
        $query->execute();

        $game = $query->fetch($pdo::FETCH_ASSOC);
        $gameEntity = new Game();


        foreach ($game as $key => $value) {
            $gameEntity->{'set' . StringTools::toPascalCase($key)}($value);
        }

        return $gameEntity;
    }

    public function findNameById(int $id)
    {
        $mysql = Mysql::getInstance();
        $pdo = $mysql->getPDO();


        $query = $pdo->prepare('SELECT name FROM games WHERE id_jeu = :id');
        $query->bindValue(':id', $id, $pdo::PARAM_INT);
        $query->execute();

        $name = $query->fetchColumn();

        return $name;
    }
}
