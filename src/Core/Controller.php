<?php

namespace UnluPaw\Core;

/**
 * Controlador.
 */
class Controller {

    /**
     * Nombre del modelo que se corresponde al controlador, si hay alguno.
     * @var string
     */
    protected string $modelName = "";

    /**
     * Instancia del modelo que se corresponde al controlador, si hay alguno.
     */
    protected Model $model;

    /**
     * Instancia de la solicitud HTTP.
     * @var Request
     */
    protected Request $request;

    /**
     * @throws \Exception Si el modelo no existe.
     */
    public function __construct(Request $request) {
        if (!empty($this->modelName)) {
            $modelName = "UnluPaw\\App\\Models\\" . $this->modelName;
            $this->model = new $modelName();
        }
        $this->request = $request;
    }

    /**
     * Renderiza la vista especificada.
     * @param string $view Ruta de la vista a renderizar, relativa al directorio
     * de vistas de la app.
     * @param array $params Parámetros a pasar a la vista.
     * @throws \Exception Si el fichero de la vista no existe.
     */
    protected function render(string $view, array $params = []) {
        extract($params);
        require __DIR__ . "/../App/Views/" . $view;
    }

}
