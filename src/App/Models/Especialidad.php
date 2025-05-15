<?php

namespace UnluPaw\App\Models;

use UnluPaw\Core\Exceptions\RecordNotFoundException;
use UnluPaw\Core\Model;

/**
 * Modelo de especialidades.
 */
class Especialidad extends Model {

    public const DATA = [
        1 => [
            "id" => 1,
            "nombre" => "Dermatología",
            "descripcion" => "El servicio de dermatología tiene como objetivo el cuidado de la piel, el pelo, las uñas y las mucosas, como la oral. Está conformado por dermatólogos infantiles (para pacientes recién nacidos y hasta los 15 años de edad) y dermatólogos de adultos (desde 16 años en adelante). Desempeña sus funciones en el ámbito ambulatorio y de internación.",
            "profesionales" => []
        ],
        2 => [
            "id" => 2,
            "nombre" => "Neurología",
            "descripcion" => "El servicio de neurología tiene como objetivo la prevención, el diagnóstico y el tratamiento del paciente adulto con enfermedades del sistema nervioso central y periférico -accidente cerebrovascular, cefaleas, epilepsias, demencias y trastornos neurodegenerativos, trastornos del movimiento, polineuropatías y miopatías-, tratando en lo posible evitar o minimizar las posibles secuelas y discapacidades que estas enfermedades ocasionan.",
            "profesionales" => []
        ],
        3 => [
            "id" => 3,
            "nombre" => "Urología",
            "descripcion" => "El servicio de urología depende del departamento de cirugía y se ocupa de la asistencia de pacientes con patologías benignas y oncológicas del aparato urinario. Realiza atención de pacientes en consultorios externos (consultas programadas y demanda espontánea), y atención de pacientes internados con enfermedades urológicas clínicas y quirúrgicas.",
            "profesionales" => []
        ]
    ];

    /**
     * Retorna un array con todas las especialidades.
     * @return array
     */
    public function getAll() {
        return [self::DATA[1], self::DATA[2], self::DATA[3]];
    }

    /**
     * Retorna la especialidad solicitada.
     * @param int $id ID de la especialidad a recuperar.
     * @return array
     * @throws RecordNotFoundException Si la especialidad solicitada no existe.
     */
    public function getById(int $id) {
        if (key_exists($id, self::DATA)) {
            return self::DATA[$id];
        }
        throw new RecordNotFoundException();
    }

}
