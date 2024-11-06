<?php

use Routes\Router;

session_start();

//Register the autoloader
require __DIR__ . "/../autoload.php";

//Register routes
$router = new Router();
require __DIR__ . "/../src/Routes/routes.php";

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

$router->route($uri, $method)();