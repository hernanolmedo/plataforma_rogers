<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Carrera_paciente;
use Illuminate\Routing\Controller;
use Illuminate\Auth\Access\Response;

use Illuminate\Routing\Redirector;
use App\Paciente;
use App\Testoq;
class EpicrisisController extends Controller
{
    public function viewEpicrisis(){
        return view('formulario.epicrisis');
    }
    public function guardarEpicrisis(Request $request){
        $epicrisis = new Epicrisis;
        try {
            $epicrisis -> id_usuario =  $request->input('');
            $epicrisis -> num_sesiones_real =  $request->input('');
         //   $epicrisis -> fecha_cierre =  array getdate ([ int $timestamp = time() ] );
            $epicrisis -> tipo_cierre =  $request->input('otro');
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
