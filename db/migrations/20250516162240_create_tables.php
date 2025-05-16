<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateTables extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change(): void
    {
        $table = $this->table("especialidades");
        $table->addColumn("nombre", "string")
              ->addColumn("descripcion", "string")
              ->create();
        $table = $this->table("profesionales");
        $table->addColumn("matricula", "string")
              ->addColumn("nombre", "string")
              ->addColumn("apellido", "string")
              ->addColumn("idEspecialidad", "integer")
              ->addColumn("pathImagen", "string")
              ->addColumn("diasQueAtiende", "string")
              ->addColumn("horarioInicio", "string")
              ->addColumn("horarioFinalizacion", "string")
              ->addColumn("duracionTurno", "integer")
              ->create();
        $table = $this->table("turnos");
        $table->addColumn("nombreApellido", "string")
              ->addColumn("telefonoCelular", "string")
              ->addColumn("correo", "string")
              ->addColumn("fechaNacimiento", "datetime")
              ->addColumn("fechaTurno", "datetime")
              ->addColumn("horaTurno", "string")
              ->create();
    }
}
