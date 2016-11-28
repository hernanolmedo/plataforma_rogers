<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testoq extends Model
{
	 protected $table = "testoq";
     protected $fillable = ['num_sesion','id_paciente','total','res_sintomatologia','res_relac_inter','res_rol_social','situacion_actual_pac','observacion_riesgo','preg_1','preg_2','preg_3','preg_4','preg_5','preg_6','preg_7','preg_8','preg_9','preg_10','preg_11','preg_12','preg_13','preg_14','preg_15','preg_16','preg_17','preg_18','preg_19','preg_20','preg_21','preg_22','preg_23','preg_24','preg_25','preg_26','preg_27','preg_28','preg_29','preg_30','preg_31','preg_32','preg_33','preg_34','preg_35','preg_36','preg_37','preg_38','preg_39','preg_40','preg_41','preg_42','preg_43','preg_44','preg_45'];
     	public $timestamps = false;


      public function paciente(){
    	return $this->belongsTo('App\Paciente');
    }
}
