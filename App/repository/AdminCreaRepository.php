<?php

namespace App\Repository;

class AdminCreaRepository extends MainRepository
{
    public function createArticle(array $data)
    {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $query = $this->pdo->prepare("
        CREATE PROCEDURE inserer_dans_plusieurs_tables
        @developpeur VARCHAR(50),
        @editeur VARCHAR(50),
        @date_de_sortie DATE,
        @game_name VARCHAR(255),
        @description TEXT,
        @image VARCHAR(255),
        @pegi INT,
        @genre VARCHAR(50),

        AS
            BEGIN
                BEGIN TRANSACTION;

                INSERT INTO genre (name)
                    VALUES (@genre);
                        DECLARE @id_genre INT = SCOPE_IDENTITY();

                INSERT INTO pegi (label)
                    VALUES (@pegi);
                        DECLARE @id_pegi INT = SCOPE_IDENTITY();

                INSERT INTO about (developpeur, editeur, date_de_sortie)
                    VALUES (@developpeur, @editeur, @date_de_sortie);
                        DECLARE @id_about INT = SCOPE_IDENTITY();

                INSERT INTO games (name, description, id_pegi, id_about)
                    VALUES (@game_name, @description, @pegi, @id_about);
                        DECLARE @id_game INT = SCOPE_IDENTITY();

                INSERT INTO image (name, id_jeu)
                    VALUES (@image, @id_game);
                        DECLARE @id_image INT = SCOPE_IDENTITY();

            COMMIT TRANSACTION;
        END;
                
        ");

        $query->bindValue(':developpeur', $data['developpeur'], $this->pdo::PARAM_STR);
        $query->bindValue(':editeur', $data['editeur'], $this->pdo::PARAM_STR);
        $query->bindValue(':date_de_sortie', $data['date_de_sortie'], $this->pdo::PARAM_STR);
        $query->bindValue(':game_name', $data['game_name'], $this->pdo::PARAM_STR);
        $query->bindValue(':description', $data['description'], $this->pdo::PARAM_STR);
        $query->bindValue(':image', $data['image'], $this->pdo::PARAM_STR);
        $query->bindValue(':pegi', $data['pegi'], $this->pdo::PARAM_INT);
        $query->bindValue(':genre', $data['genre'], $this->pdo::PARAM_STR);

        return $query->execute();
    }
    }

    public function createPlateform(array $data)
    {
        $query = $this->pdo->prepare("
        CREATE PROCEDURE inserer_dans_plusieurs_tables
        @plateforme VARCHAR(50),
        @price DECIMAL(10, 2),

        AS
            BEGIN
                BEGIN TRANSACTION;

                INSERT INTO plateforme (name)
                    VALUES (@plateforme);
                        DECLARE @id_plateforme INT = SCOPE_IDENTITY();

                INSERT INTO specifications (id_store, id_jeu, id_plateforme, price, quantity, discounted, promo)
                    VALUES (@store, @id_game, @id_plateforme, @price, @quantity, @discounted, @promo);
                        DECLARE @id_specifications INT = SCOPE_IDENTITY();
        ");
    }
    
    public function createMagasin(array $data)
    {
        $query = $this->pdo->prepare("
        CREATE PROCEDURE inserer_dans_plusieurs_tables
        @quantity INT,
        @discounted BOOLEAN,
        @promo DECIMAL(3, 2),
        @store VARCHAR(8)

        AS
            BEGIN
                BEGIN TRANSACTION;

                INSERT INTO store (city)
                    VALUES (@store);
                        DECLARE @id_store VARCHAR = SCOPE_IDENTITY();

                INSERT INTO specifications (id_store, id_jeu, id_plateforme, price, quantity, discounted, promo)
                    VALUES ( @store, @id_game, @id_plateforme, @price, @quantity, @discounted, @promo);
                        DECLARE @id_specifications INT = SCOPE_IDENTITY();

                COMMIT TRANSACTION;
            END;
        ");
    }
        
}

/** Procédure stockée
 * CREATE PROCEDURE inserer_dans_plusieurs_tables
 * AS
 * BEGIN
 *    INSERT INTO table1 (col1, col2) VALUES ('valeur1', 'valeur2');
 *    INSERT INTO table2 (col1, col2) VALUES ('valeur3', 'valeur4');
 * END;
 * 
 * ATTENTION à l'order des tables pour les clés étrangères
 */