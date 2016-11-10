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
            $table->timestamp('updated_at')->nullable();
           $table->integer('id_paciente')->unsigned();
            $table->integer('id_usuario')->unsigned();
            $table->integer('pre1');
            $table->integer('pre2');
            $table->integer('pre3');
            $table->integer('pre4');
            $table->integer('pre5');
            $table->integer('pre6');
            $table->integer('pre7');
            $table->integer('pre8');
            $table->integer('pre9');
            $table->integer('pre10');
            $table->integer('pre11');
            $table->integer('pre12');
            $table->text('motivo_consulta');
            $table->text('indicaciones');
            $table->string('sugerencia');
            $table->text('observaciones');
            $table->text('comentarios');

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
