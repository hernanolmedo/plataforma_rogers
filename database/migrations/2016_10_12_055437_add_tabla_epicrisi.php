<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTablaEpicrisi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('epicrisi', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('id_usuario')->unsigned();
            $table->integer('id_paciente')->unsigned();
            $table->integer('num_sesiones_real');
            $table->date('fecha_cierre');
            $table->string('tipo_cierre');
            $table->string('diagnostico_DSM_1');
            $table->string('diagnostico_DSM_2');
            $table->string('diagnostico_DSM_3');
            $table->string('diagnostico_DSM_4');
            $table->string('diagnostico_DSM_5');
            $table->string('interconsultas_der');
            $table->string('psicodiagnostico');
            $table->string('resumen_tratamiento');
            $table->string('evaluacion_logro');
            $table->string('coment_finales');

            $table->foreign('id_paciente')->references('id')->on('paciente');
            $table->foreign('id_usuario')->references('id')->on('usuario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('epicrisi');
    }
}
