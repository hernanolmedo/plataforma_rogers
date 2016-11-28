<?php

namespace App\Http\Controllers;

use App\Ficha_ingreso;
use App\User;
use App\Carrera_paciente;
use App\Paciente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;


class fichaIngresoController extends Controller
{
    public function view(){
        if (Auth::check()) {
            $usuario = Auth::user();
            if ($usuario->tipo_usuario == 'psicologo' or $usuario->tipo_usuario == 'administrador')
                return view('formulario.fichaIngreso');
            else
                return dd("No posee los permisos para acceder a agregar una ficha de ingreso");
        }
        else
            return  view('Auth.login');
    }

    public function guardarFichaIngreso(Request $request){
        $carreraPrueba = Carrera_paciente::create(['facultad' => 'Ingenieria','nombre_carrera'=>'informatica','ano_ingreso'=>'2012','nivel_carrera'=>6,'jornada'=>'D','matricula_al_dia'=>True]);
        $pacientePrueba = Paciente::create(['nombre' => 'Juan perez','rut'=>'1866787-3','fecha_nac'=>'1990-02-20', 'sexo'=>'F','email'=>'juan.perez@usach.cl','fono_casa'=>'12343235','celular'=>'912232476','nombre_padre_tutor'=>'Juan Padre Perez','fono_padre_tutor'=>'55667853','sistema_previsional'=>'Fonasa','region'=>'R.Metropolitana','comuna'=>'Maipu','preferencia_horaria'=>'L3 L2 M5 M6 W4 W2 J1 J2', 'id_carrera'=> $carreraPrueba->id]);
        $pacientePrueba->push();

        $ficha = new Ficha_ingreso();
        try{
            $ficha->id_usuario = Auth::id();
            $ficha->id_paciente = $pacientePrueba->id;

            if($request->has('atencion_anterior'))
                $ficha->atencion_anterior = $request->input('atencion_anterior');
            else
                $ficha->atencion_anterior = "Sin especificar";

            if($request->has('atencion_fuera_usach'))
                $ficha->atencion_fuera_usach = $request->input('atencion_fuera_usach');
            else
                $ficha->atencion_fuera_usach = "Sin especificar";

            $ficha->motivo_consulta_sint = $request->input('motivo_consulta_sint');
            $ficha->hipotesis_diag = $request->input('hipotesis_diag');
            $ficha->ant_generales = $request->input('ant_generales');

            if($request->has('observaciones'))
                $ficha->observaciones = $request->input('observaciones');
            else
                $ficha->observaciones = "Sin observaciones";

            $ficha->push();
            return dd("La ficha de ingreso se ha agregado exitosamente");
        }
        catch(Exception $e){
            echo 'Excepción capturada: ',  $e->getMessage(), "\n";
        }
    }
}
