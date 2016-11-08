<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\usuario;


class fichaIngresoController extends Controller
{
    public function view(){
        return view('formulario.fichaIngreso');
    }

    public function guardarFichaIngreso(Request $request){
        $usuario = Usuario::create(['nombre' => 'psicologo1' , 'rut' => '111111111', 'email' => 'psicologo1@usach.cl', 'contrasena' => 'a1b2c3', 'tipo_usuario' => 'psicologo']);
        dd($usuario);
    }
}
