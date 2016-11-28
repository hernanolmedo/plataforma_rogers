<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTablaTestoq extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testoq', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('num_sesion');
            $table->integer('id_paciente')->unsigned();
            $table->integer('total');
            $table->integer('res_sintomatologia');
            $table->integer('res_relac_inter');
            $table->integer('res_rol_social');
            // dejamos default de testOQ en lista_espera, asì solo actualizamos este campo si puntaje da para "en_tratamiento"
            $table->enum('situacion_actual_pac',['lista_espera','tratamiento', 'evaluacion'])->default('evaluacion');
            $table->boolean('observacion_riesgo');


            //*********************
            //    Preguntas
            //*********************
            $table->integer('preg_1');
            $table->integer('preg_2');
            $table->integer('preg_3');
            $table->integer('preg_4');
            $table->integer('preg_5');
            $table->integer('preg_6');
            $table->integer('preg_7');
            $table->integer('preg_8');
            $table->integer('preg_9');
            $table->integer('preg_10');
            $table->integer('preg_11');
            $table->integer('preg_12');
            $table->integer('preg_13');
            $table->integer('preg_14');
            $table->integer('preg_15');
            $table->integer('preg_16');
            $table->integer('preg_17');
            $table->integer('preg_18');
            $table->integer('preg_19');
            $table->integer('preg_20');
            $table->integer('preg_21');
            $table->integer('preg_22');
            $table->integer('preg_23');
            $table->integer('preg_24');
            $table->integer('preg_25');
            $table->integer('preg_26');
            $table->integer('preg_27');
            $table->integer('preg_28');
            $table->integer('preg_29');
            $table->integer('preg_30');
            $table->integer('preg_31');
            $table->integer('preg_32');
            $table->integer('preg_33');
            $table->integer('preg_34');
            $table->integer('preg_35');
            $table->integer('preg_36');
            $table->integer('preg_37');
            $table->integer('preg_38');
            $table->integer('preg_39');
            $table->integer('preg_40');
            $table->integer('preg_41');
            $table->integer('preg_42');
            $table->integer('preg_43');
            $table->integer('preg_44');
            $table->integer('preg_45');
            $table->foreign('id_paciente')->references('id')->on('paciente');
            $table->timestamps();
           // $table->timestamp('updated_at')->nulleable();
           // $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('testoq');
    }
}
