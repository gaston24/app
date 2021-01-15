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
    return view('/auth/login');
});

Auth::routes();

Route::get('/login', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


/*USUARIOS*/
Route::get('/usuarios', 'UsuariosController@todos')->name('usuarios');
Route::get('/usuarios/{id}', 'UsuariosController@buscarUno');
Route::post('/usuarios/usuariosActua/{id}', 'UsuariosController@actualizar');
Route::post('usuarios/usuariosAgrega', 'UsuariosController@agregarUno');
Route::delete('/usuarios/usuariosEliminar/{id}', 'UsuariosController@eliminarUno');


/*EQUIS*/ 
Route::get('/equis', 'EquisController@traerTodos')->name('equis')->middleware('auth');
Route::get('/equis/actualizar/', 'EquisController@actualizar')->middleware('auth');

Route::get('equis/excelExport', 'EquisController@exportExcel')->name('equis.exportar');
