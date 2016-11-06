<?php

namespace App\Http\Controllers;

use App\Carrera_paciente;
use Illuminate\Auth\Access\Response;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Routing\Redirector;
use App\Paciente;

use App\Http\Requests;
use App\Testoq;
// probando or segunda con up

class ControllerTestoq extends Controller
{
    public function view()
    {
    	return view('formulario.test_oq');
    }

    /**
     * @param Request $request
     */
    public function obtenerOQ(Request $request){

// PACIENTE DE MUESTRA:
        $carreraPrueba = Carrera_paciente::create(['facultad' => 'Ingenieria','nombre_carrera'=>'informatica','ano_ingreso'=>'2012','nivel_carrera'=>6,'jornada'=>'D','matricula_al_dia'=>True]);
        $pacientePrueba = Paciente::create(['nombre' => 'Juan perez','rut'=>'1866787-3','fecha_nac'=>'1990-02-20','sexo'=>'F','email'=>'juan.perez@usach.cl','fono_casa'=>'12343235','celular'=>'912232476','nombre_padre_tutor'=>'Juan Padre Perez','fono_padre_tutor'=>'55667853','sistema_previsional'=>'Fonasa','region'=>'R.Metropolitana','comuna'=>'Maipu','preferencia_horaria'=>'L3 L2 M5 M6 W4 W2 J1 J2', 'id_carrera'=> $carreraPrueba->id]);
         $pacientePrueba->push();

    	$form_oq = new Testoq;
        $sumatoria =0;
        $sintomatologìa = 0;
        $rel_interpersonales = 0;
        $rol_social = 0;
       for ($i = 1; $i <= 45; $i++) {
	       	$numeroHttp='pre'.$i;
	        $numeroBD='preg_'.$i;

	    	$form_oq->$numeroBD=$request->input($numeroHttp);

	    	//calcular total
	        $sumatoria = $sumatoria + $form_oq->$numeroBD;

	        //calcular sintomatologìa
	        if($i == 2 or $i == 3 or $i == 5 or $i == 6 or $i == 8 or $i == 9 or $i == 10 or $i == 11 or $i == 13 or $i == 15 or $i == 22 or $i == 23 or $i == 24 or $i == 25 or $i == 27 or $i == 29 or $i == 31 or $i == 33 or $i == 34 or $i == 35 or $i == 36 or $i == 40 or $i == 41 or $i == 42 or $i == 45 ){

	        	$sintomatologìa = $sintomatologìa + $form_oq->$numeroBD;
	        }

	        //calcular relaciones interpersonales
	        elseif($i == 1 or $i == 7 or $i == 16 or $i == 17 or $i == 18 or $i == 19 or $i == 20 or $i == 26 or $i == 30 or $i == 37 or $i == 43){
	        	$rel_interpersonales = $rel_interpersonales + $form_oq->$numeroBD;
	        }
	        //calcular rol social
	        else{
	        	$rol_social = $rol_social + $form_oq->$numeroBD;
	        }
          
         }

         $form_oq->total = $sumatoria;
         $form_oq->res_sintomatologia = $sintomatologìa;
         $form_oq->res_relac_inter = $rel_interpersonales;
         $form_oq->res_rol_social = $rol_social;

         $form_oq->num_sesion = 0;
         $form_oq->id_paciente = $pacientePrueba->id;
         //echo ("<h1>Ha completado el test OQ_45.2 correctamente</h1><br> sus resultados son: <br>total = " . $sumatoria . "<br> sintomatologìa = " . $sintomatologìa . "<br> relaciones interpersonales = " . $rel_interpersonales . "<br> rol social = " . $rol_social);
         if($form_oq->preg_8 >= 3 or $form_oq->preg_11 >=3 or $form_oq->preg_26 >=3 or $form_oq->preg_30 >=3 or $form_oq->preg_32 >= 3 or $form_oq->preg_37 >= 3 or $form_oq->total >= 73 or $form_oq->res_sintomatologia >= 43){
         		$form_oq->observacion_riesgo = True;
         }
         else{
         		$form_oq->observacion_riesgo = False;
         }
         $form_oq->push();

            $respuesta = ['total' => $form_oq->total,
        	'sintomatologia' => $form_oq->res_sintomatologia,
        	'rel_interpersonales' => $form_oq->res_relac_inter,
        	'rol_social' => $form_oq->res_rol_social,
            'observacion_riesgo' => $form_oq->observacion_riesgo,
            'preg_8' => $form_oq->preg_8,
            'preg_11' => $form_oq->preg_11,
            'preg_26' => $form_oq->preg_26,
            'preg_30' => $form_oq->preg_30,
            'preg_32' => $form_oq->preg_32,
            'preg_37' => $form_oq->preg_37];

        	return response()->view("formulario.testTerminado", $respuesta, 200);
 
           //$this->render('test_oq',$respuesta);
       
    }
}
