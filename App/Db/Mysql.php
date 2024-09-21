<?php

namespace App\Db;

class Mysql

{
    private $db_name;
    private $db_user;
    private $db_password;
    private $db_port;
    private $db_host;
    private $pdo = null;
    private static $_instance = null;

    private function __construct()
    {
        $conf = require_once _ROOTPATH_ . '/config.php';

        if (isset($conf['db_name'])) {
            $this->db_name = $conf['db_name'];
        }
        if (isset($conf['db_user'])) {
            $this->db_user = $conf['db_user'];
        }
        if (isset($conf['db_password'])) {
            $this->db_password = $conf['db_password'];
        }
        if (isset($conf['db_port'])) {
            $this->db_port = $conf['db_port'];
        }
        if (isset($conf['db_host'])) {
            $this->db_host = $conf['db_host'];
        }
    }


    public static function getInstance(): self
    {

        if (is_null(self::$_instance)) {

            self::$_instance = new Mysql();
        }
        return self::$_instance;
    }


    public function getPDO(): \PDO
    {

        if (is_null($this->pdo)) {
            $this->pdo = new \PDO('mysql:dbname=' . $this->db_name . ';charset=utf8;host=' . $this->db_host . ':' . $this->db_port, $this->db_user, $this->db_password);
        }
        return $this->pdo;
    }
}


/* Code à modifier

Requête pour le calcul du prix total des commandes

<?php
// Connexion à votre base de données (à remplacer par les bonnes informations)
$dsn = 'mysql:host=votre_hote;dbname=votre_base;charset=utf8';
$user = 'votre_utilisateur';
$password = 'votre_mot_de_passe';

try {
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Préparation de la requête
    $stmt = $pdo->prepare("
        SELECT 
            c.id_order,
            g.nom_jeu,
            s.quantity,
            s.price * s.quantity AS price_total
        FROM 
            contenu c
        INNER JOIN games g ON c.id_jeu = g.id_jeu
        INNER JOIN specifications s ON c.id_jeu = s.id_jeu AND c.id_order = s.id_store
        WHERE 
            c.id_order = ?
    ");

    // Exécution de la requête avec l'ID de la commande en paramètre
    $id_commande = 123; // Remplacez par l'ID de la commande que vous souhaitez
    $stmt->execute([$id_commande]);

    // Récupération des résultats
    $resultat = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Affichage des résultats (exemple)
    foreach ($resultat as $row) {
        echo "Commande : " . $row['id_order'] . "<br>";
        echo "Jeu : " . $row['nom_jeu'] . "<br>";
        echo "Quantité : " . $row['quantity'] . "<br>";
        echo "Prix total : " . $row['price_total'] . " €<br>";
    }
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

*/