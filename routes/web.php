<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { return redirect('/usuarios'); });
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


/*VENTAS*/
Route::get('/ventas', 'VentasController@localesPropios')->name('ventas');
Route::get('/ventas/locales', 'VentasController@localesPropios')->name('locales');
Route::get('/ventas/localesComp', 'VentasController@localesPropiosComp')->name('localesComp');
Route::get('/ventas/franquicias', 'VentasController@localesFranquicias')->name('franquicias');
Route::get('/ventas/franquiciasComp', 'VentasController@franquiciasComp')->name('franquiciasComp');
Route::get('/ventas/todos', 'VentasController@todos')->name('todos');


/*USUARIOS*/
Route::get('/usuarios', 'UsuariosController@todos')->name('usuarios')->middleware('auth');
Route::get('/usuarios/{id}', 'UsuariosController@buscarUno')->middleware('auth');
Route::post('/usuarios/usuariosActua/{id}', 'UsuariosController@actualizar')->middleware('auth');
Route::post('usuarios/usuariosAgrega', 'UsuariosController@agregarUno')->middleware('auth');
Route::delete('/usuarios/usuariosEliminar/{id}', 'UsuariosController@eliminarUno')->middleware('auth');


/*EQUIS*/ 
Route::get('/equis', 'EquisController@traerTodos')->name('equis')->middleware('auth');
Route::get('/equis/actualizar/', 'EquisController@actualizar')->middleware('auth');



/*ENVIO DE CLIENTES */
Route::get('/envioClientes', function(){ return view('envioClientes/accion'); });
Route::get('/envioClientes/crearElige', function(){ return view('envioClientes/crearElige'); });
Route::get('/envioClientes/enviarElige', function(){ return view('envioClientes/enviarElige'); });

