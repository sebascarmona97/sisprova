<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('home');
});

Route::get('home', function()
{
	return View::make('home');
});

Route::get('usuarios', 'UsuarioController@mostrar');
Route::post('usuarios', 'UsuarioController@guardar');
Route::get('crearusuario', 'UsuarioController@formulario');
Route::get('editarusuario/{id}', 'UsuarioController@obtener');
Route::post('editarusuario/{id}', 'UsuarioController@actualizar');
Route::get('eliminarprofesor/{id}', 'ProfesorController@eliminar');

Route::get('operarios','operarioController@mostrar');
Route::post('operarios', 'operarioController@guardar');


Route::get('crearoperarios', 'operarioController@formulario');
Route::get('editaroperario/{id}','operarioController@obtener');
Route::post('editaroperario/{id}','operarioController@actualizar');


Route::get('estados','estadoController@mostrar');

Route::get('tipoUsuarios','tipousuarioController@mostrar');

Route::get('tipoDocumento','tipodocumentoController@mostrar');



   




