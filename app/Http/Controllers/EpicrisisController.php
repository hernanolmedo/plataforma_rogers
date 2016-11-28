<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Epicrisis;
use Illuminate\Routing\Controller;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Auth;

use Illuminate\Routing\Redirector;
use App\Paciente;
use App\Carrera_paciente;
use App\Testoq;
use Carbon\Carbon;
use DB;

class EpicrisisController extends Controller
{
    public function viewEpicrisis(){
        if (Auth::check()) {
            $usuario = Auth::user();
            if ($usuario->tipo_usuario == 'psicologo' or $usuario->tipo_usuario == 'administrador')
                return view('formulario.epicrisis');
            else
                return dd("No posee los permisos para acceder a agregar una epicrisis");
        }
        else
            return  view('Auth.login');
    }

    public function guardarEpicrisis(Request $request){
        $epicrisis = new Epicrisis;
        try {
            $carreraPrueba = Carrera_paciente::create(['facultad' => 'Ingenieria','nombre_carrera'=>'informatica','ano_ingreso'=>'2012','nivel_carrera'=>6,'jornada'=>'D','matricula_al_dia'=>True]);
            $pacientePrueba = Paciente::create(['nombre' => 'Juan perez','rut'=>'1866787-3','fecha_nac'=>'1990-02-20','sexo'=>'F','email'=>'juan.perez@usach.cl','fono_casa'=>'12343235','celular'=>'912232476','nombre_padre_tutor'=>'Juan Padre Perez','fono_padre_tutor'=>'55667853','sistema_previsional'=>'Fonasa','region'=>'R.Metropolitana','comuna'=>'Maipu','preferencia_horaria'=>'L3 L2 M5 M6 W4 W2 J1 J2', 'id_carrera'=> $carreraPrueba->id]);
            $pacientePrueba->push();     
            $epicrisis -> id_usuario =  Auth::id();
            $epicrisis -> id_paciente =  $pacientePrueba->id;
            $epicrisis -> num_sesiones_real =  DB::table('sesion')->where('id_paciente', '=', $pacientePrueba->id)->count();
            $epicrisis -> fecha_cierre = Carbon::now();
            $epicrisis -> fecha_cierre = $epicrisis -> fecha_cierre->format('Y-m-d');
            $epicrisis -> tipo_cierre =  $request->input('tipo_cierre');
            if($epicrisis->tipo_cierre == "otro") 
                $epicrisis->tipo_cierre = $epicrisis->tipo_cierre . ": " . $request->input('otro');

            $epicrisis -> diagnostico_DSM_1 =  $request->input('DSM1');
            $epicrisis -> diagnostico_DSM_2 =  $request->input('DSM2');
            $epicrisis -> diagnostico_DSM_3 =  $request->input('DSM3');
            $epicrisis -> diagnostico_DSM_4 =  $request->input('DSM4');
            $epicrisis -> diagnostico_DSM_5 =  $request->input('DSM5');
            $epicrisis -> interconsultas_der =  $request->input('interconsulta');
            $epicrisis -> psicodiagnostico =  $request->input('psicodiag');
            $epicrisis -> resumen_tratamiento =  $request->input('resumen');
            $epicrisis -> evaluacion_logro =  $request->input('metas');
            $epicrisis -> coment_finales =  $request->input('comentarios');


            $epicrisis ->push();
            dd("Epicrisis creada exitosamente");

        }
        catch(Exception $e){
            echo 'Excepción capturada: ',  $e->getMessage(), "\n";
        }
    }
}
