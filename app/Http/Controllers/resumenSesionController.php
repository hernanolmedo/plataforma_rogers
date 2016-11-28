<?php

namespace App\Http\Controllers;

use App\Pauta_eval;
use App\Sesion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\Carrera_paciente;
use App\Paciente;

class resumenSesionController extends Controller
{
    public function view(){
        if (Auth::check()) {
            $usuario = Auth::user();
            if ($usuario->tipo_usuario == 'psicologo' or $usuario->tipo_usuario == 'administrador')
                return view('formulario.resumenSesion');
            else
                return dd("No posee los permisos para acceder a agregar una ficha de ingreso");
        }
        else
            return  view('Auth.login');
    }
    public function guardarResumenSesion(Request $request){
        $carreraPrueba = Carrera_paciente::create(['facultad' => 'Ingenieria','nombre_carrera'=>'informatica','ano_ingreso'=>'2012','nivel_carrera'=>6,'jornada'=>'D','matricula_al_dia'=>True]);
        $pacientePrueba = Paciente::create(['nombre' => 'Juan perez','rut'=>'1866787-3','fecha_nac'=>'1990-02-20', 'sexo'=>'F','email'=>'juan.perez@usach.cl','fono_casa'=>'12343235','celular'=>'912232476','nombre_padre_tutor'=>'Juan Padre Perez','fono_padre_tutor'=>'55667853','sistema_previsional'=>'Fonasa','region'=>'R.Metropolitana','comuna'=>'Maipu','preferencia_horaria'=>'L3 L2 M5 M6 W4 W2 J1 J2', 'id_carrera'=> $carreraPrueba->id]);
        $pacientePrueba->push();

        $resumen = new Sesion();

        try {
            $resumen->resumen = $request->input('resumen');

            if ($request->has('observaciones'))
                $resumen->observaciones = $request->input('observaciones');
            else
                $resumen->observaciones = "SIN OBSERVACIONES";

            $resumen->id_usuario = Auth::id();
            $resumen->id_paciente = $pacientePrueba->id;

            $resumen->push();

            return dd("Resumen agregado exitosamente");
        }
        catch(Exception $e){
            echo 'Excepción capturada: ',  $e->getMessage(), "\n";
        }
    }
}
