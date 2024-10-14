<?php

// indique où ce situe le fichier
namespace App\Repository;

use App\Db\Mysql;
use App\Entity\Game;

class GameRepository extends MainRepository
{
    public function homeDisplay()
    {
        $query = $this->pdo->prepare('SELECT
            g.name AS name,
            p.label AS pegi_name,
            s.price AS specification_price,
            pl.name AS plateforme_name,
            g.id_jeu AS id
            FROM games AS g
            INNER JOIN specifications s ON g.id_jeu = s.id_jeu
            INNER JOIN plateforme pl ON s.id_plateforme = pl.id_plateforme
            INNER JOIN pegi p ON g.id_pegi = p.id_pegi
            ORDER BY RAND()
            LIMIT 3');


        $query->execute();

        $game = $query->fetchAll($this->pdo::FETCH_ASSOC);

        return $game;
    }


    public function findDetail(int $id)
    {


        $query = $this->pdo->prepare('SELECT
            g.name AS name,
            g.description AS description,
            p.label AS pegi_name,
            s.price AS specification_price,
            s.quantity AS quantity,
            pl.name AS plateforme_name,
            a.developpeur AS developpeur,
            a.editeur AS editeur,
            a.date_de_sortie AS date_de_sortie,
            GROUP_CONCAT(DISTINCT ge.name) AS genre,
            g.id_jeu AS id
            FROM games AS g
            INNER JOIN specifications s ON g.id_jeu = s.id_jeu
            INNER JOIN plateforme pl ON s.id_plateforme = pl.id_plateforme
            INNER JOIN pegi p ON g.id_pegi = p.id_pegi
            INNER JOIN about a ON g.id_about = a.id_about
            INNER JOIN style st ON g.id_jeu = st.id_jeu
            INNER JOIN genre ge ON st.id_genre = ge.id_genre
            WHERE g.id_jeu = :id
          ');

        $query->bindParam(':id', $id, $this->pdo::PARAM_INT);

        $query->execute();
        $detail = $query->fetch($this->pdo::FETCH_ASSOC);
        if ($detail) {

            return $detail;
        }
        return false;
    }

    public function promoDisplay()
    {
        $query = $this->pdo->prepare('SELECT
            g.name AS name,
            p.label AS pegi_name,
            s.price AS specification_price,
            pl.name AS plateforme_name,
            g.id_jeu AS id
            FROM games AS g
            INNER JOIN specifications s ON g.id_jeu = s.id_jeu
            INNER JOIN plateforme pl ON s.id_plateforme = pl.id_plateforme
            INNER JOIN pegi p ON g.id_pegi = p.id_pegi
            ORDER BY RAND()
            LIMIT 6');


        $query->execute();

        $game = $query->fetchAll($this->pdo::FETCH_ASSOC);

        return $game;
    }
}
