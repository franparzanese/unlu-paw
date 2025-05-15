<?php

require __DIR__ . "/../vendor/autoload.php";

use UnluPaw\Core\Request;
use UnluPaw\Core\Router;

$router = new Router();

// Rutas de la app.
$router->addRoute("GET", "/", "GeneralController@home");

$router->dispatch(new Request());
