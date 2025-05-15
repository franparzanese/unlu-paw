<?php

namespace UnluPaw\Core;

use UnluPaw\Core\Request;

/**
 * Ruteador.
 */
class Router {

    /**
     * Rutas configuradas.
     * @var array
     */
    private array $routes = [];

    /**
     * Agrega/actualiza una ruta.
     * @param string $method Método HTTP.
     * @param string $path Path de la URL.
     * @param string $route Nombre del controlador y acción concatenados con una "@".
     * @throws \Exception Si la ruta no es válida.
     */
    public function addRoute(string $method, string $path, string $route) {
        if (count(explode("@", $route)) !== 2) {
            throw new \Exception("La ruta no es válida: " . $route);
        }
        $method = strtoupper($method);
        $path = strtolower($path);
        if (key_exists($method, $this->routes)) {
            $this->routes[$method][$path] = $route;
        } else {
            $this->routes[$method] = [$path => $route];
        }
    }

    /**
     * Ejecuta la acción de controlador correspondiente a la ruta solicitada.
     * @param Request $request Instancia de la solicitud.
     * @throws \Exception Si el controlador o la acción solicitada no existen.
     */
    public function dispatch(Request $request) {
        list($method, $path) = $request->route();
        $method = strtoupper($method);
        $path = strtolower($path);
        if (key_exists($method, $this->routes) && key_exists($path, $this->routes[$method])) {
            list($controller, $action) = explode("@", $this->routes[$method][$path]);
        } else {
            // La ruta solicitada no existe.
            $controller = "ErrorController";
            $action = "notFound";
        }
        $controllerClass = "UnluPaw\\App\\Controllers\\" . $controller;
        $controllerInstance = new $controllerClass($request);
        $controllerInstance->$action();
    }

}
