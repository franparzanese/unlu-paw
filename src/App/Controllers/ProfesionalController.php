<?php

namespace UnluPaw\App\Controllers;

use UnluPaw\Core\Controller;
use UnluPaw\Core\Exceptions\RecordNotFoundException;

/**
 * Controlador de profesionales.
 */
class ProfesionalController extends Controller {

    /**
     * @inheritdoc
     */
    protected string $modelName = "Profesional";

    public function profesionales() {
        $data = $this->model->getAll();
        $this->render("profesionales.php", ["data" => $data]);
    }

    public function profesional() {
        $id = intval($this->request->param("id"));
        if ($id === 0) {
            // El parámetro no se especificó o bien no es un entero.
            $this->profesionales();
        } else {
            try {
                $data = $this->model->getById($id);
                $this->render("profesional.php", ["data" => $data]);
            } catch (RecordNotFoundException $ex) {
                $this->render("notFound.php", ["message" => "El profesional que estás buscando no existe."]);
            }
        }
    }

}
