<?php

define('_ROOTPATH_', __DIR__);

spl_autoload_register();

use App\Controller\Controller;
use App\Repository\GameRepository;

$controller = new Controller;
$controller->route();


// TEST

$gameRepository = new GameRepository;
$datas = $gameRepository->findOneById(1);
var_dump($datas);

?>