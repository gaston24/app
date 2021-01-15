<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () { return redirect('/usuarios'); });
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


/*USUARIOS*/
Route::get('/usuarios', 'UsuariosController@todos')->name('usuarios');
Route::get('/usuarios/{id}', 'UsuariosController@buscarUno');
Route::post('/usuarios/usuariosActua/{id}', 'UsuariosController@actualizar');
Route::post('usuarios/usuariosAgrega', 'UsuariosController@agregarUno');
Route::delete('/usuarios/usuariosEliminar/{id}', 'UsuariosController@eliminarUno');


/*EQUIS*/ 
Route::get('/equis', 'EquisController@traerTodos')->name('equis')->middleware('auth');
Route::get('/equis/actualizar/', 'EquisController@actualizar')->middleware('auth');

