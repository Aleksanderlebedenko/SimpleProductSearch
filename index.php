<?php

/**
 * This is file which simulate calling of the controller with some input.
 *
 */


//It is needed for autoloader of the classes.
//require __DIR__ . '/../vendor/autoload.php';


use App\Controller\ProductController;
use App\ProductFacade;
use App\ProductLogger;

$productFacade = new ProductFacade();
$productLogger = new ProductLogger();
$controller = new ProductController($productFacade, $productLogger);
$result = $controller->detail('2');

var_dump($result); // Should be empty array for our case.