<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

/// URL::setRootControllerNamespace('App\Http\Controllers');

Route::get('/', function () {
    return view('index2');
});

Route::get('pauta_evaluacion', function () {
    return view('formulario.pautaEvaluacion');
});

Route::get('ficha_paciente', function () {
    return view('vista_pacientes.fichaPaciente');
});

Route::get('ficha_ingreso', [
    'uses' => 'fichaIngresoController@view',
    'as' => 'FichaIngresoView'
]);

Route::post('ficha_ingreso', [
    'uses' => 'fichaIngresoController@guardarFichaIngreso',
    'as' => 'GuardarFichaIngreso'
]);
Route::get('resumen_sesion', function () {
    return view('formulario.resumenSesion');
});

Route::get('test_oq',[
	'uses' => 'ControllerTestoq@view',
	'as' => 'TestoqView'
]);

Route::post('test_oq','ControllerTestoq@obtenerOQ');

Route::get('crear_paciente', [
    'uses' => 'PacienteController@viewCrearPaciente',
    'as' => 'CrearPacienteView'
]);


Route::post('crear_paciente','PacienteController@guardarPaciente');
//Route::Controller('testTerminado','ControllerTestoq');
//Route::post('crear_paciente','PacienteController@buscarPaciente');   // probando rutear Buscador y ventana crear_paciente

Route::get('resultadoBusquedaPaciente', function () {
    return view('vista_pacientes.resultadoBusquedaPaciente');
});

//Route::get('prueba_admin', function () {
//    return view('index2');


// rutas olmedo 
Route::get('epicrisis', [
    'uses' => 'EpicrisisController@viewEpicrisis',
    'as' => 'EpicrisisView'
]);

Route::post('epicrisis','EpicrisisController@guardarEpicrisis');
