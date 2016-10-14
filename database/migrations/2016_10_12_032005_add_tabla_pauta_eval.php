<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTablaPautaEval extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pauta_eval', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamp('created_at')->nullable();
           $table->integer('id_paciente')->unsigned();
            $table->integer('id_usuario')->unsigned();
            $table->integer('sint_ansiosa');
            $table->integer('sint_depresiva');
            $table->integer('idea_int_suicida');
            $table->integer('trans_alimen');
            $table->integer('prob_identidad');
            $table->integer('prob_academicos');
            $table->integer('prob_familiares');
            $table->integer('prob_pareja');
            $table->integer('prob_interper');
            $table->integer('duelo');
            $table->integer('abuso_sex');
            $table->integer('otro');
            $table->string('motivo_consulta');
            $table->string('indicaciones');
            $table->string('sugerencia');
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
        Schema::dropIfExists('pauta_eval');
    }
}
