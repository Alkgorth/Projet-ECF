<?php

define('_ROOTPATH_', __DIR__);

spl_autoload_register();

use App\Controller\Controller;
use App\Repository\GameRepository;

$controller = new Controller;
$controller->route();


// TEST
/**
*   $specificationsRepository = new GameRepository;
*   $gameDetail = $specificationsRepository->findDetail(1);

*   var_dump($gameDetail);
 */

var_dump($_POST);
?>