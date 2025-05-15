<?php

namespace UnluPaw\Core;

/**
 * Clase que representa una solicitud HTTP.
 */
class Request {

    /**
     * Retorna el método HTTP de la solicitud.
     * @return string
     */
    private function method() {
        return $_SERVER["REQUEST_METHOD"];
    }

    /**
     * Retorna el path de la solicitud.
     * @return string
     */
    private function uri() {
        return parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
    }

    /**
     * Retorna un array con dos valores de tipo string: el método HTTP y el path
     * de la solicitud.
     * @return array
     */
    public function route() {
        return [$this->method(), $this->uri()];
    }

    /**
     * Retorna un parámetro enviado en la solicitud, ya sea POST o GET.
     * @param string $param Nombre del parámetro.
     * @return string|null El valor del parámetro si fue especificado, o null si no.
     */
    public function param(string $param) {
        if (key_exists($param, $_POST)) {
            return $_POST[$param];
        }
        if (key_exists($param, $_GET)) {
            return $_GET[$param];
        }
        return null;
    }

}
