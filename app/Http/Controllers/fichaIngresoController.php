<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;


class fichaIngresoController extends Controller
{
    public function view(){
        return view('formulario.fichaIngreso');
    }

    public function guardarFichaIngreso(Request $request){
        $usuario = Auth::user();
        dd($usuario);
    }
}
