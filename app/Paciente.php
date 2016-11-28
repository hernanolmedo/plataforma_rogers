<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $table = "paciente";
    protected $fillable = ['nombre','rut','fecha_nac','sexo','email','fono_casa','celular','nombre_padre_tutor','fono_padre_tutor','sistema_previsional','region','comuna','fecha_ingreso','preferencia_horaria', 'id_carrera'];

   public $timestamps = false;
    // HAS MANY TEST OQ
    public function testoq(){
    	return $this->hasMany('App\Testoq');
    }

    public function epicrisis(){
    	return $this->hasMany('App\Epicrisis');
    }

	public function ficha_ingreso(){
        return $this->hasMany('App\Ficha_ingreso');
    }

    public function sesion(){
    	return $this->hasMany('App\Sesion');
    }

     public function carrera_paciente(){
    	return $this->hasOne('App\Carrera_paciente');
    }

    public function pauta_eval(){
        return $this->hasOne('App\Pauta_eval');
    }

}
