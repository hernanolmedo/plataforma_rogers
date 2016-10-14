<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = ['name', 'email', 'password'];

    /**
     * The attributes that should be hidden for arrays.
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    // Un usuario tiene muchas epicrisis
    public function epicrisi(){
        return $this->hasMany('App\Epicrisi');
    }

    public function pauta_eval(){
        return $this->hasMany('App\Pauta_eval');
    }

     public function ficha_ingreso(){
        return $this->hasMany('App\Ficha_ingreso');
    }

     public function sesion(){
        return $this->hasMany('App\Sesion');
    }
}
