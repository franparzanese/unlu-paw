<?php

namespace UnluPaw\App\Controllers;

use UnluPaw\Core\Controller;

/**
 * Controlador de turnos.
 */
class TurnoController extends Controller {

    /**
     * @inheritdoc
     */
    protected string $modelName = "Turno";

    public function turnos() {
        $data = $this->model->getAll();
        $this->render("turnos.php", ["data" => $data]);
    }

    public function nuevoTurno() {
        $this->render("nuevoTurno.php");
    }

}
