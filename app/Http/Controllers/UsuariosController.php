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
}
