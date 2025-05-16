<?php

require __DIR__ . "/../vendor/autoload.php";

use Dotenv\Dotenv;
use UnluPaw\Core\Request;
use UnluPaw\Core\Router;

$dotenv = Dotenv::createUnsafeImmutable(__DIR__ . "/../");
$dotenv->load();

$router = new Router();

// Rutas de la app.
$router->addRoute("GET", "/", "GeneralController@home");
$router->addRoute("GET", "/identidad", "GeneralController@identidad");
$router->addRoute("GET", "/infraestructura", "GeneralController@infraestructura");
$router->addRoute("GET", "/horarios-y-telefonos", "GeneralController@horariosYTelefonos");
$router->addRoute("GET", "/medios-de-pago", "GeneralController@mediosDePago");
$router->addRoute("GET", "/derechos-del-paciente", "GeneralController@derechosDelPaciente");
$router->addRoute("GET", "/novedades", "GeneralController@novedades");
$router->addRoute("GET", "/novedad", "GeneralController@novedad");
$router->addRoute("GET", "/especialidades", "EspecialidadController@especialidades");
$router->addRoute("GET", "/especialidad", "EspecialidadController@especialidad");
$router->addRoute("GET", "/profesionales", "ProfesionalController@profesionales");
$router->addRoute("GET", "/profesional", "ProfesionalController@profesional");
$router->addRoute("GET", "/turnos", "TurnoController@turnos");
$router->addRoute("GET", "/nuevoTurno", "TurnoController@nuevoTurno");
$router->addRoute("POST", "/nuevoTurno", "TurnoController@agregarTurno");
$router->addRoute("POST", "/turnos", "TurnoController@filtrarTurnos");

$router->dispatch(new Request());
