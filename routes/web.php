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
    return view('formulario.test_oq');
});


Route::get('test_oq',[
	'uses' => 'ControllerTestoq@view',
	'as' => 'TestoqView'
  //  return view('formulario.test_oq');
]);

Route::post('test_oq','ControllerTestoq@obtenerOQ');

//Route::Controller('testTerminado','ControllerTestoq');

//Route::get('prueba_admin', function () {
//    return view('index2');
//});