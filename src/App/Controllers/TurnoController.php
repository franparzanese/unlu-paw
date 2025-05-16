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

    public function agregarTurno() {
        $errors = [];
        // Sanitización de datos.
        $name = trim($this->request->param("name"));
        $phone = trim($this->request->param("phone"));
        $email = trim($this->request->param("email"));
        $birthdate = $this->request->param("birthdate");
        $turnDate = $this->request->param("turn-date");
        $turnTime = $this->request->param("turn-time");
        // Validaciones.
        if (empty($name)) {
            $errors[] = "el nombre y el apellido son obligatorios.";
        }
        if (!preg_match('/^\d{10}$/', $phone)) {
            $errors[] = "el teléfono celular debe contener 10 dígitos en total (sin 0 ni 15).";
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "el correo no es válido.";
        }
        if (!preg_match('/^\d{4}-\d{2}-\d{2}$/', $birthdate)) {
            $errors[] = "la fecha de nacimiento es inválida.";
        }
        if (!preg_match('/^\d{4}-\d{2}-\d{2}$/', $turnDate)) {
            $errors[] = "la fecha del turno es inválida.";
        }
        if (!preg_match('/^\d{2}:\d{2}$/', $turnTime)) {
            $errors[] = "la hora del turno es inválida.";
        }
        if (isset($_FILES["study-file"]) && $_FILES["study-file"]["error"] === UPLOAD_ERR_OK) {
            $tmpName = $_FILES["study-file"]["tmp_name"];
            $finfo = finfo_open(FILEINFO_MIME_TYPE);
            $mime = finfo_file($finfo, $tmpName);
            finfo_close($finfo);
            if (strpos($mime, "image/") !== 0) {
                $errors[] = "el estudio clínico adjunto debe ser un archivo de imagen.";
            }
            /**
             * @TODO El siguiente bloque de código mueve el fichero subido a un
             * directorio específico. Descomentar e implementar en la v1.0.0.
             */
//            $newFileName = uniqid("img_") . "." . strtolower(pathinfo($_FILES["study-file"]["name"], PATHINFO_EXTENSION));
//            if (!move_uploaded_file($tmpName, __DIR__ . "/" . $newFileName)) {
//                die("Error al mover la imagen.");
//            }
        }
        if (empty($errors)) {
            $this->model->save([
                "nombreApellido" => $name,
                "telefonoCelular" => $phone,
                "correo" => $email,
                "fechaNacimiento" => $birthdate,
                "fechaTurno" => $turnDate,
                "horaTurno" => $turnTime
            ]);
            $params = [
                "formSuccess" => true,
                "formMessage" => "El turno ha sido registrado."
            ];
        } else {
            $params = [
                "formSuccess" => false,
                "formMessage" => "El formulario tiene errores: " . implode(" ", $errors)
            ];
        }
        $this->render("nuevoTurno.php", $params);
    }

    public function filtrarTurnos() {
        $errors = [];
        // Sanitización de datos.
        $dateFrom = $this->request->param("date-from");
        $dateTo = $this->request->param("date-to");
        // Validaciones.
        if (!preg_match('/^\d{4}-\d{2}-\d{2}$/', $dateFrom)) {
            $errors[] = "la fecha \"desde\" es inválida.";
        }
        if (!preg_match('/^\d{4}-\d{2}-\d{2}$/', $dateTo)) {
            $errors[] = "la fecha \"hasta\" es inválida.";
        }
        if (empty($errors)) {
            $formSuccess = true;
            $formMessage = "El formulario es válido. Los filtros se aplicarán efectivamente en la v1.0.0.";
        } else {
            $formSuccess = false;
            $formMessage = "El formulario tiene errores: " . implode(" ", $errors);
        }
        $data = $this->model->getAll();
        $this->render("turnos.php", [
            "data" => $data,
            "formSuccess" => $formSuccess,
            "formMessage" => $formMessage
        ]);
    }

}
