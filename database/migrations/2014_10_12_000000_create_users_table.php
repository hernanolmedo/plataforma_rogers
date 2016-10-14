<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('rut');
            $table->string('email')->unique();
            $table->string('contrasena');
            // Dejamos por default la asignación de tipo_usuario='paciente' al crear nuevo nuevo usuario
            $table->enum('tipo_usuario',['administrador','paciente','secretaria','psicologo'])->default('paciente');
            $table->rememberToken();
            // esto queda como atributo fecha_creac_cuenta
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('usuario');
    }
}
