<?php

// indique où ce situe le fichier
namespace App\Repository;


use App\Entity\Game;
use App\Db\Mysql;
use App\Tools\StringTools;

class GameRepository extends MainRepository
{
    public function findOneById2()
    {
        $query = $this->pdo->prepare('SELECT
            g.name AS name,
            p.label AS pegi_name,
            s.price AS specification_price,
            pl.name AS plateforme_name
            FROM games AS g
            JOIN specifications s ON g.id_jeu = s.id_jeu
            JOIN plateforme pl ON s.id_plateforme = pl.id_plateforme
            JOIN pegi p ON g.id_pegi = p.id_pegi
            ORDER BY RAND()
            LIMIT 3');

       
        $query->execute();

        $game = $query->fetchAll($this->pdo::FETCH_ASSOC);
            
        return $game;
    }

    
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

        public function findPegiById(int $id)
        {
            $mysql = Mysql::getInstance();
            $pdo = $mysql->getPDO();


            $query = $pdo->prepare('SELECT id_pegi FROM games WHERE id_jeu = :id');
            $query->bindValue(':id', $id, $pdo::PARAM_INT);
            $query->execute();

            $pegi = $query->fetchColumn();

            return $pegi;
        }
        
}
