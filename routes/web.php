<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


/*USUARIOS*/
Route::get('/usuarios', 'UsuariosController@todos')->name('usuarios');
Route::get('/usuarios/{id}', 'UsuariosController@buscarUno');
Route::post('/usuarios/usuariosActua/{id}', 'UsuariosController@actualizar');
Route::post('usuarios/usuariosAgrega', 'UsuariosController@agregarUno');
Route::delete('/usuarios/usuariosEliminar/{id}', 'UsuariosController@eliminarUno');


/*599*/ 
Route::get('/equis', 'EquisController@traerTodos')->name('equis');