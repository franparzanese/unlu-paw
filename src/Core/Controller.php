<?php

namespace UnluPaw\Core;

/**
 * Controlador.
 */
class Controller {

    /**
     * Instancia de la solicitud HTTP.
     * @var Request
     */
    protected Request $request;

    public function __construct(Request $request) {
        $this->request = $request;
    }

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
