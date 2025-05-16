<?php

namespace UnluPaw\App\Models;

use UnluPaw\Core\Exceptions\RecordNotFoundException;
use UnluPaw\Core\Model;

/**
 * Modelo de profesionales.
 */
class Profesional extends Model {

    public const DATA = [
        1 => [
            "id" => 1,
            "matricula" => "1101",
            "nombre" => "Lena Marisa",
            "apellido" => "Gagliardi",
            "disciplina" => Especialidad::DATA[1],
            "pathImagen" => "lmgagliardi.svg",
            "diasQueAtiende" => ["Lunes", "Miércoles", "Viernes"],
            "horarioInicio" => ["horas" => 13, "minutos" => 0],
            "horarioFinalizacion" => ["horas" => 16, "minutos" => 0],
            "duracionTurno" => 30
        ],
        2 => [
            "id" => 2,
            "matricula" => "1202",
            "nombre" => "Norberto Fabián",
            "apellido" => "González",
            "disciplina" => Especialidad::DATA[2],
            "pathImagen" => "nfgonzalez.svg",
            "diasQueAtiende" => ["Lunes", "Martes", "Jueves"],
            "horarioInicio" => ["horas" => 15, "minutos" => 0],
            "horarioFinalizacion" => ["horas" => 20, "minutos" => 0],
            "duracionTurno" => 20
        ],
        3 => [
            "id" => 3,
            "matricula" => "1303",
            "nombre" => "Patricio",
            "apellido" => "Holst",
            "disciplina" => Especialidad::DATA[3],
            "pathImagen" => "pholst.svg",
            "diasQueAtiende" => ["Martes", "Miércoles", "Viernes"],
            "horarioInicio" => ["horas" => 10, "minutos" => 0],
            "horarioFinalizacion" => ["horas" => 14, "minutos" => 0],
            "duracionTurno" => 15
        ],
        4 => [
            "id" => 4,
            "matricula" => "1204",
            "nombre" => "Juan Cruz",
            "apellido" => "Lotrecchiano",
            "disciplina" => Especialidad::DATA[2],
            "pathImagen" => "jclotrecchiano.svg",
            "diasQueAtiende" => ["Lunes", "Miércoles", "Jueves"],
            "horarioInicio" => ["horas" => 10, "minutos" => 0],
            "horarioFinalizacion" => ["horas" => 15, "minutos" => 0],
            "duracionTurno" => 20
        ],
        5 => [
            "id" => 5,
            "matricula" => "1105",
            "nombre" => "Mario Alfredo",
            "apellido" => "Marchese",
            "disciplina" => Especialidad::DATA[1],
            "pathImagen" => "mamarchese.svg",
            "diasQueAtiende" => ["Martes", "Jueves", "Viernes"],
            "horarioInicio" => ["horas" => 10, "minutos" => 0],
            "horarioFinalizacion" => ["horas" => 13, "minutos" => 0],
            "duracionTurno" => 30
        ],
        6 => [
            "id" => 6,
            "matricula" => "1306",
            "nombre" => "Gabriel",
            "apellido" => "Nolazco",
            "disciplina" => Especialidad::DATA[3],
            "pathImagen" => "gnolazco.svg",
            "diasQueAtiende" => ["Lunes", "Miércoles", "Viernes"],
            "horarioInicio" => ["horas" => 14, "minutos" => 0],
            "horarioFinalizacion" => ["horas" => 18, "minutos" => 0],
            "duracionTurno" => 15
        ]
    ];

    /**
     * Retorna un array con todos los profesionales.
     * @return array
     */
    public function getAll() {
        return [self::DATA[1], self::DATA[2], self::DATA[3], self::DATA[4], self::DATA[5], self::DATA[6]];
    }

    /**
     * Retorna el profesional solicitado.
     * @param int $id ID del profesional a recuperar.
     * @return array
     * @throws RecordNotFoundException Si el profesional solicitado no existe.
     */
    public function getById(int $id) {
        if (key_exists($id, self::DATA)) {
            return self::DATA[$id];
        }
        throw new RecordNotFoundException();
    }

}
