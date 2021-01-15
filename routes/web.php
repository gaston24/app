<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () { return redirect('/usuarios'); });
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


/*USUARIOS*/
Route::get('/usuarios', 'UsuariosController@todos')->name('usuarios')->middleware('auth');
Route::get('/usuarios/{id}', 'UsuariosController@buscarUno')->middleware('auth');
Route::post('/usuarios/usuariosActua/{id}', 'UsuariosController@actualizar')->middleware('auth');
Route::post('usuarios/usuariosAgrega', 'UsuariosController@agregarUno')->middleware('auth');
Route::delete('/usuarios/usuariosEliminar/{id}', 'UsuariosController@eliminarUno')->middleware('auth');


/*EQUIS*/ 
Route::get('/equis', 'EquisController@traerTodos')->name('equis')->middleware('auth');
Route::get('/equis/actualizar/', 'EquisController@actualizar')->middleware('auth');

