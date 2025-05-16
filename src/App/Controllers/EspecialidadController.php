<?php

namespace UnluPaw\App\Controllers;

use UnluPaw\Core\Controller;
use UnluPaw\Core\Exceptions\RecordNotFoundException;

/**
 * Controlador de especialidades.
 */
class EspecialidadController extends Controller {

    /**
     * @inheritdoc
     */
    protected string $modelName = "Especialidad";

    public function especialidades() {
        $data = $this->model->getAll();
        $this->render("especialidades.php", ["data" => $data]);
    }

    public function especialidad() {
        $id = intval($this->request->param("id"));
        if ($id === 0) {
            // El parámetro no se especificó o bien no es un entero.
            $this->especialidades();
        } else {
            try {
                $data = $this->model->getById($id);
                $this->render("especialidad.php", ["data" => $data]);
            } catch (RecordNotFoundException $ex) {
                $this->render("notFound.php", ["message" => "La especialidad que estás buscando no existe."]);
            }
        }
    }

}
