<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ficha_ingreso extends Model
{
    protected $table = "ficha_ingreso_dps";
     protected $fillable = ['id_usuario','id_paciente','atencion_anterior','atencion_fuera_usach','motivo_consulta_sint','hipotesis_diag','ant_generales','observaciones'];

 public function usuario(){
    	return $this->belongsTo('App\User');
    }

}
