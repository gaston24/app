<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

use App\Models\Usuario;

class UsuariosController extends Controller
{
    //

    public function todos(){
        $todosLosUsuarios = Usuario::orderBy('TIPO')
                                    ->orderBy('NRO_SUCURS') 
                                    ->orderBy('COD_CLIENT')
                                    ->orderBy('NOMBRE')
                                    ->get();

        return view('usuarios.usuarios', compact('todosLosUsuarios'));
    }

    public function buscarUno($id){
        $usuario = Usuario::findOrFail($id);

        return $usuario;
    }

    public function actualizar(Request $request){

        $request->validate([
            'nombre' => 'required',
            'pass' => 'required',
            'id' => 'required',
        ]);

        try {

            DB::table('SOF_USUARIOS')
            ->where('ID', $request->id)
            ->update(
                [
                    'NOMBRE'        => $request->nombre,
                    'PASS'          => $request->pass,
                    'DSN'           => $request->dsn,
                    'DESCRIPCION'   => $request->descripcion,
                    'COD_CLIENT'    => $request->codClient,
                    'NRO_SUCURS'    => $request->nroSucurs,
                    'COD_VENDED'    => $request->codVended,
                    'TANGO'         => $request->tango,
                    'TIPO'          => $request->tipo
                ]
            );

            return ['success' => true, 'message' => 'USUARIO ACTUALIZADO!'];

          } catch (ModelNotFoundException $ex) {

            return ['success' => true, 'message' => $ex];

          }
    }




    public function agregarUno(Request $request){

        $request->validate([
            'nombre' => 'required',
            'pass' => 'required',
        ]);

        try {


            DB::table('SOF_USUARIOS')->insert(
                [
                    'NOMBRE'        => $request->nombre,
                    'PASS'          => $request->pass,
                    'DSN'           => $request->dsn,
                    'DESCRIPCION'   => $request->descripcion,
                    'COD_CLIENT'    => $request->codClient,
                    'NRO_SUCURS'    => $request->nroSucurs,
                    'COD_VENDED'    => $request->codVended,
                    'TANGO'         => $request->tango,
                    'TIPO'          => $request->tipo
                ]
            );

            return ['success' => true, 'message' => $request];

          } catch (ModelNotFoundException $ex) {

            return ['success' => true, 'message' => $ex];

          }
    }

    public function eliminarUno(Request $request){

        try {
            
            DB::table('SOF_USUARIOS')->where('ID','=', $request->id)->delete();

            return ['success' => true, 'message' => 'USUARIO ELIMINADO'];

        } catch (ModelNotFoundException $ex) {

        return ['success' => true, 'message' => $ex];

        }

        

    }

}
