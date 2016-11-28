<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTablaEpicrisis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('epicrisis', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('id_usuario')->unsigned();
            $table->integer('id_paciente')->unsigned();
            $table->integer('num_sesiones_real');
            $table->date('fecha_cierre');
            $table->text('tipo_cierre');
            $table->text('diagnostico_DSM_1');
            $table->text('diagnostico_DSM_2');
            $table->text('diagnostico_DSM_3');
            $table->text('diagnostico_DSM_4');
            $table->text('diagnostico_DSM_5');
            $table->text('interconsultas_der');
            $table->text('psicodiagnostico');
            $table->text('resumen_tratamiento');
            $table->text('evaluacion_logro');
            $table->text('coment_finales');

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
        Schema::dropIfExists('epicrisis');
    }
}
