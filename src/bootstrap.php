<?php

require __DIR__ . "/../vendor/autoload.php";

use UnluPaw\Core\Request;
use UnluPaw\Core\Router;

$router = new Router();

// Rutas de la app.
$router->addRoute("GET", "/", "GeneralController@home");
$router->addRoute("GET", "/identidad", "GeneralController@identidad");
$router->addRoute("GET", "/infraestructura", "GeneralController@infraestructura");
$router->addRoute("GET", "/horarios-y-telefonos", "GeneralController@horariosYTelefonos");
$router->addRoute("GET", "/medios-de-pago", "GeneralController@mediosDePago");
$router->addRoute("GET", "/derechos-del-paciente", "GeneralController@derechosDelPaciente");

$router->dispatch(new Request());
