<?php

// indique où ce situe le fichier
namespace App\Repository;


use App\Entity\Specifications;
use App\Db\Mysql;
use App\Tools\StringTools;

class SpecificationsRepository
{
    public function findPriceById(int $id)
    {
                // Appel de la bdd
                $mysql = Mysql::getInstance();
                $pdo = $mysql->getPDO();
        
        
                $query = $pdo->prepare('SELECT * FROM specifications WHERE id_jeu = :id');
                $query->bindValue(':id', $id, $pdo::PARAM_INT);
                $query->execute();
        
                $specifications = $query->fetch($pdo::FETCH_ASSOC);
                $specificationsEntity = new Specifications();

                foreach ($specifications as $key => $value) {
                    $specificationsEntity->{'set' . StringTools::toPascalCase($key)}($value);
                }
        
                return $specificationsEntity;
    }
}