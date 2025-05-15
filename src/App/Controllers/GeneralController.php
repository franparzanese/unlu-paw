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

    public function novedades() {
        $this->render("novedades.php");
    }

    public function novedad() {
        $id = intval($this->request->param("id"));
        if ($id === 0) {
            // El parámetro no se especificó o bien no es un entero.
            $this->render("novedades.php");
        } elseif ($id === 1) {
            $this->render("jornada-prevencion-cardiovascular.php");
        } elseif ($id === 2) {
            $this->render("unidos-por-inclusion.php");
        } else {
            $this->render("TODO_NOT_FOUND.php");
        }
    }

}
