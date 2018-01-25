<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProyectoEmpleado extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectos_empleados', function (Blueprint $table) {
            $table->unsignedInteger('id_empleado');
            $table->unsignedInteger('id_proyecto');
            $table->timestamps();
            $table->primary(['id_empleado', 'id_proyecto']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proyectos_empleados');
    }
}
