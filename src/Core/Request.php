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

}
