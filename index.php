<?php

/**
 * This is file which simulate calling of the controller with some input.
 */

$productFacade = new ProductFacade();
$productLogger = new ProductLogger();
$controller = new ProductController($productFacade, $productLogger);
$result = $controller->detail('2');

var_dump($result); // Should be empty array for our case.