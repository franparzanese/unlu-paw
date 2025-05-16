<?php

namespace UnluPaw\App\Models;

use UnluPaw\Core\Model;

/**
 * Modelo de turnos.
 */
class Turno extends Model {

    public const DATA = [
        1 => [
            "id" => 1,
            "nombreApellido" => "Martina Gómez",
            "telefonoCelular" => "1167891234",
            "correo" => "martina.gomez@ejemplo.com",
            "fechaNacimiento" => "1992-04-15",
            "fechaTurno" => "2025-05-17",
            "horaTurno" => "09:00"
        ],
        2 => [
            "id" => 2,
            "nombreApellido" => "Lucas Fernández",
            "telefonoCelular" => "1145678899",
            "correo" => "lucas.fernandez@ejemplo.com",
            "fechaNacimiento" => "1987-09-30",
            "fechaTurno" => "2025-05-19",
            "horaTurno" => "10:30"
        ],
        3 => [
            "id" => 3,
            "nombreApellido" => "Sofía Herrera",
            "telefonoCelular" => "1133445566",
            "correo" => "sofia.herrera@ejemplo.com",
            "fechaNacimiento" => "1995-01-22",
            "fechaTurno" => "2025-05-19",
            "horaTurno" => "14:15"
        ],
        4 => [
            "id" => 4,
            "nombreApellido" => "Diego Ramírez",
            "telefonoCelular" => "1177889900",
            "correo" => "diego.ramirez@ejemplo.com",
            "fechaNacimiento" => "1980-06-08",
            "fechaTurno" => "2025-05-20",
            "horaTurno" => "16:45"
        ]
    ];

    /**
     * Retorna un array con todos los turnos.
     * @return array
     */
    public function getAll() {
        return [self::DATA[1], self::DATA[2], self::DATA[3], self::DATA[4]];
    }

    public function save(array $data) {
        $this->queryBuilder->insert("INSERT INTO turnos (nombreApellido, telefonoCelular, correo, fechaNacimiento, fechaTurno, horaTurno) "
                . "VALUES ('" . $data["nombreApellido"] . "', '" . $data["telefonoCelular"] . "', '" . $data["correo"]
                . "', '" . $data["fechaNacimiento"] . "', '" . $data["fechaTurno"] . "', '" . $data["horaTurno"] . "')");
    }

}
