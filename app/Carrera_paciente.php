<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrera_paciente extends Model
{
    protected $table = "carrera_paciente";
    public $timestamps = false;
    protected $fillable = ['facultad','nombre_carrera','ano_ingreso','nivel_carrera','jornada','matricula_al_dia'];

    public function paciente(){
    	return $this->belongsTo('App\Paciente');
    }
}
