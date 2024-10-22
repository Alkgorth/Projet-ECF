<?php

namespace App\Repository;

class AdminCreaRepository extends MainRepository
{
    public function createArticle(array $data): void
    {
        $query = $this->pdo->prepare("INSERT INTO ");
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

 CREATE PROCEDURE inserer_dans_plusieurs_tables
    @developpeur VARCHAR(50),
    @editeur VARCHAR(50),
    @date_de_sortie DATE,
    @game_name VARCHAR(255),
    @description TEXT,
    @genre VARCHAR(50),
    @image VARCHAR(255),
    @pegi INT,
    @plateforme VARCHAR(50),
    @price DECIMAL(10, 2),
    @quantity INT,
    @discounted BOOLEAN,
    @promo DECIMAL(2, 2),
    @store VARCHAR(8)

    AS
    BEGIN
        BEGIN TRANSACTION;

        INSERT INTO about (developpeur, editeur, date_de_sortie)
            VALUES ('valeur1', 'valeur2', 'valeur13');
                DECLARE @about_id INT = SCOPE_IDENTITY();
        INSERT INTO games (name, description, id_pegi, id_about)
            VALUES ('valeur3', 'valeur4', @pegi, @about_id);
                DECLARE @game_id INT = SCOPE_IDENTITY();
        INSERT INTO genre (name)
            VALUES ('valeur5');
                DECLARE @genre_id INT = SCOPE_IDENTITY();
        INSERT INTO image (name, id_jeu)
            VALUES ('valeur6', @game_name);
                DECLARE @image_id INT = SCOPE_IDENTITY();
        INSERT INTO pegi (label)
            VALUES ('valeur7');
                DECLARE @pegi_id INT = SCOPE_IDENTITY();
        INSERT INTO plateforme (name)
            VALUES ('valeur8');
                DECLARE @plateforme_id INT = SCOPE_IDENTITY();
        INSERT INTO specifications (id_store, id_jeu, id_plateforme, price, quantity, discounted, promo)
            VALUES ( @store, @game_name, @plateforme, 'valeur9', 'valeur10', 'valeur11', 'valeur12');
                DECLARE @specifications_id INT = SCOPE_IDENTITY();
        INSERT INTO image (city)
            VALUES ('valeur14');
                DECLARE @store_id INT = SCOPE_IDENTITY();

        COMMIT TRANSACTION;
    END;