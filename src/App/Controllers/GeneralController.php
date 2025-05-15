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

}
