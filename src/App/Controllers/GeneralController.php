<?php

namespace UnluPaw\App\Controllers;

use UnluPaw\Core\Controller;

/**
 * Controlador para las páginas "generales".
 */
class GeneralController extends Controller {

    public function home() {
        $this->render("home.php");
    }

    public function identidad() {
        $this->render("identidad.php");
    }

    public function infraestructura() {
        $this->render("infraestructura.php");
    }

    public function horariosYTelefonos() {
        $this->render("horarios-y-telefonos.php");
    }

    public function mediosDePago() {
        $this->render("medios-de-pago.php");
    }

    public function derechosDelPaciente() {
        $this->render("derechos-del-paciente.php");
    }

}
