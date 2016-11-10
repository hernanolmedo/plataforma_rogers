<?php

namespace App\Http\Controllers;

use App\Pauta_eval;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\Carrera_paciente;
use App\Paciente;

class pautaEvaluacionController extends Controller
{
    public function view(){
        if (Auth::check()) {
            $usuario = Auth::user();
            if ($usuario->tipo_usuario == 'psicologo' or $usuario->tipo_usuario == 'administrador')
                return view('formulario.pautaEvaluacion');
            else
                return dd("No posee los permisos para acceder a agregar una ficha de ingreso");
        }
        else
            return  view('Auth.login');
    }
    public function guardarPautaEvaluacion(Request $request){
        $carreraPrueba = Carrera_paciente::create(['facultad' => 'Ingenieria','nombre_carrera'=>'informatica','ano_ingreso'=>'2012','nivel_carrera'=>6,'jornada'=>'D','matricula_al_dia'=>True]);
        $pacientePrueba = Paciente::create(['nombre' => 'Juan perez','rut'=>'1866787-3','fecha_nac'=>'1990-02-20', 'sexo'=>'F','email'=>'juan.perez@usach.cl','fono_casa'=>'12343235','celular'=>'912232476','nombre_padre_tutor'=>'Juan Padre Perez','fono_padre_tutor'=>'55667853','sistema_previsional'=>'Fonasa','region'=>'R.Metropolitana','comuna'=>'Maipu','preferencia_horaria'=>'L3 L2 M5 M6 W4 W2 J1 J2', 'id_carrera'=> $carreraPrueba->id]);
        $pacientePrueba->push();

        $pauta = new Pauta_eval();
        try{
            for($i= 1; $i<=12; $i++){
                $radio = "pre".$i;
                $pauta->$radio = $request->input($radio);
            }

            $pauta->id_paciente = $pacientePrueba->id;
            $pauta->id_usuario = Auth::id();
            $pauta->motivo_consulta = $request->input('motivo_consulta');
            $pauta->indicaciones = $request->input('indicaciones');

            $pauta->sugerencia = "";
            if($request->has('checkboxTG'))
                $pauta->sugerencia = $pauta->sugerencia.$request->input('checkboxTG')." - ";
            if($request->has('checkboxC'))
                $pauta->sugerencia = $pauta->sugerencia.$request->input('checkboxC');
            if($pauta->sugerencia == "")
                $pauta->sugerencia = "SIN SUGERENCIAS";

            if($request->has('observaciones'))
                $pauta->observaciones = $request->input('observaciones');
            else
                $pauta->observaciones = "SIN OBSERVACIONES";

            if($request->has('comentarios'))
                $pauta->comentarios = $request->input('comentarios');
            else
                $pauta->comentarios = "SIN COMENTARIOS";

            $pauta->push();
            return dd("La Pauta de evaluación se ha agregado exitosamente");
        }
        catch(Exception $e){
            echo 'Excepción capturada: ',  $e->getMessage(), "\n";
        }
    }
}
