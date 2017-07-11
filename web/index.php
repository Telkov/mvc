<?php

require_once '../vendor/components/functions.php';

$routes = explode('/', $_SERVER['REQUEST_URI']);  //парсим урл по слэшу

$controller_name = "Controller";
$action_name = "index";

if(!empty($routes[1])) {
    $controller_name = $routes[1];
}

if (!empty($routes[2])) {
    $action_name = $routes[2];
}

$filename = '../app/controllers'.strtolower($controller_name).".php";

require_once '../app/core/Controller.php';
require_once $filename;

$controller = new Controller();
$controller->index();