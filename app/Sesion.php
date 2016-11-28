<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sesion extends Model
{
	 protected $table = "sesion";
    protected $fillable = ['nombre','fecha','id_usuario','id_paciente','resumen','observaciones'];

 public function paciente(){
    	return $this->belongsTo('App\Paciente');
    }

  public function usuario(){
    	return $this->belongsTo('App\User');
    }

}
