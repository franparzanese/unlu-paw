<?php

namespace UnluPaw\Core;

/**
 * Controlador.
 */
class Controller {

    /**
     * Renderiza la vista especificada.
     * @param string $view Ruta de la vista a renderizar, relativa al directorio
     * de vistas de la app.
     * @throws \Exception Si el fichero de la vista no existe.
     */
    protected function render(string $view) {
        require __DIR__ . "/../App/Views/" . $view;
    }

}
