<?php

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


        $query = $pdo->prepare('SELECT * FROM games WHERE id = :id');
        $query->bindValue(':id', $id, $pdo::PARAM_INT);
        $query->execute();
        
        $game = $query->fetch($pdo::FETCH_ASSOC);
        $gameEntity = new Game();

        
        foreach ($game as $key => $value) {
            $gameEntity->{'set'.StringTools::toPascalCase($key)  }($value);
        }
        
        return $gameEntity;
    }
}