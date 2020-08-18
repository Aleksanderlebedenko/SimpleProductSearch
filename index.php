<?php

/**
 * This is file which simulate calling of the controller with some input.
 * For tests, please, set autoload PSR-4.
 */


//It is needed for autoloader of the classes.
//require __DIR__ . '/../vendor/autoload.php';

// If you want to get info from the IMySQLDriver, set variable $ENV['defaultProductStorage'] = 'mySQL';
// $ENV['defaultProductStorage'] = 'mySQL';


use App\Controller\ProductController;
use App\ProductFacade;
use App\ProductLogger;

$productFacade = new ProductFacade();
$productLogger = new ProductLogger();
$controller = new ProductController($productFacade, $productLogger); // Here should be DI.
$result = $controller->detail('2'); // Controller calling simulation.

var_dump($result); // Should be empty array for our case.