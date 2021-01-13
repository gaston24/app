<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Usuario;

class UsuariosController extends Controller
{
    //

    public function todos(){
        $todosLosUsuarios = Usuario::all();

        return view('usuarios.usuarios', compact('todosLosUsuarios'));
    }

    public function buscarUno($id){
        $usuario = Usuario::findOrFail($id);

        return $usuario;
    }

    public function actualizar(Request $request, $id){
        $request->validate([
            'nombre' => 'required',
            'pass' => 'required',
            'id' => 'required',
        ]);

        $usuarioActualizado = Usuario::findOrFail($id);
        $usuarioActualizado->nombre = $request->nombre;
        $usuarioActualizado->pass = $request->pass;
        $usuarioActualizado->dsn = $request->dsn;
        $usuarioActualizado->descripcion = $request->descripcion;
        $usuarioActualizado->codClient = $request->codClient;
        $usuarioActualizado->nroSucurs = $request->nroSucurs;
        $usuarioActualizado->codVended = $request->codVended;
        $usuarioActualizado->tango = $request->tango;
        $usuarioActualizado->tipo = $request->tipo;

        $usuarioActualizado->save();

        return 'Usuario actualizado';
    }


}
