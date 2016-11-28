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

            $table->integer('id_usuario')->unsigned();
            $table->integer('id_paciente')->unsigned();
            $table->text('atencion_anterior');
            $table->text('atencion_fuera_usach');
            $table->text('motivo_consulta_sint');
            $table->text('hipotesis_diag');
            $table->text('ant_generales');
            $table->text('observaciones');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        
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