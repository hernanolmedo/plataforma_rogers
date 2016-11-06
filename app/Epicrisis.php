<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Epicrisi extends Model
{
     protected $table = "epicrisi";
     protected $fillable = ['id_usuario','id_paciente','num_sesiones_real','fecha_cierre','tipo_cierre','diagnostico_DSM_1','diagnostico_DSM_2','diagnostico_DSM_3','diagnostico_DSM_4','diagnostico_DSM_5','interconsultas_der','psicodiagnostico','resumen_tratamiento','evaluacion_logro','coment_finales'];

 public function paciente(){
    	return $this->belongsTo('App\Paciente');
    }

  public function usuario(){
    	return $this->belongsTo('App\User');
    }

}
