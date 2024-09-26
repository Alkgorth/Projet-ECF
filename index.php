<?php

define('_ROOTPATH_', __DIR__);

spl_autoload_register();

use App\Controller\Controller;
use App\Entity\Specifications;
use App\Repository\SpecificationsRepository;

$controller = new Controller;
$controller->route();


// TEST

$specificationsRepository = new SpecificationsRepository;
$datas = $specificationsRepository->findPriceById(1);
var_dump($datas);

?>