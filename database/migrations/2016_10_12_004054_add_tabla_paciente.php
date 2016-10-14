<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTablaPaciente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paciente', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamp('created_at')->nullable();
         //   $table->integer('id_pauta')->unsigned();
            $table->integer('id_carrera')->unsigned();
            $table->string('nombre');
            $table->string('rut');
            $table->date('fecha_nac');
            $table->char('sexo',4);
            $table->string('email');
            $table->string('fono_casa');
            $table->string('celular');
            $table->string('nombre_padre_tutor');
            $table->string('fono_padre_tutor');
            $table->string('sistema_previsional');
            $table->string('region');
            $table->string('comuna');
            $table->date('fecha_ingreso');
            $table->string('preferencia_horaria');

            $table->foreign('id_carrera')->references('id')->on('carrera_paciente');
          //  $table->foreign('id_pauta')->references('id')->on('pauta_eval');
            // uno a muchos : un paciente tiene uno o muchos testOq asociados
      
           

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paciente');
    }
}
