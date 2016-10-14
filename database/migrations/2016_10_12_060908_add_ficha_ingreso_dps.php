<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFichaIngresoDps extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ficha_ingreso_dps', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamp('created_at')->nullable();
            $table->integer('id_usuario')->unsigned();
            $table->integer('id_paciente')->unsigned();
            $table->string('atencion_anterior');
            $table->string('atencion_fuera_usach');
            $table->string('motivo_consulta_sint');
            $table->string('hipotesis_diag');
            $table->string('ant_generales');
            $table->string('observaciones');
        
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
        Schema::dropIfExists('ficha_ingreso_dps');
    }
}
