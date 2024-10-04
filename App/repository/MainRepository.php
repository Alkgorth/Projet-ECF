<?php

namespace App\Repository;

use App\Db\Mysql;

class MainRepository
{
    protected \PDO $pdo;

    public function __construct()
    {
        $mysql = Mysql::getInstance();
        $this->pdo = $mysql->getPDO();
    }
}