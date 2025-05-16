<?php

namespace UnluPaw\App\Models;

use UnluPaw\Core\Model;

/**
 * Modelo de turnos.
 */
class Turno extends Model {

    /**
     * Retorna un array con todos los turnos.
     * @return array
     */
    public function getAll() {
        return $this->queryBuilder->select("SELECT * FROM turnos");
    }

    public function save(array $data) {
        $this->queryBuilder->insert("INSERT INTO turnos (nombreApellido, telefonoCelular, correo, fechaNacimiento, fechaTurno, horaTurno) "
                . "VALUES ('" . $data["nombreApellido"] . "', '" . $data["telefonoCelular"] . "', '" . $data["correo"]
                . "', '" . $data["fechaNacimiento"] . "', '" . $data["fechaTurno"] . "', '" . $data["horaTurno"] . "')");
    }

}
