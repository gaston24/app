<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class EquisController extends Controller
{

    public function traerTodos (Request $request){

       
        if( $request->desde != ''){

            $todos = DB::select("SET DATEFORMAT YMD SELECT * FROM SJ_EQUIS_TABLE WHERE (FECHA_MOV BETWEEN ? AND ?)", [$request->desde, $request->hasta]);

            return view('equis.equis', compact('todos'));
            
        }else{
            
            return view('equis.equis');

        }


    }

    public function actualizar(Request $request){
        try {

            $resultado = DB::statement('UPDATE SJ_EQUIS_TABLE SET CHEQUEADO = CASE CHEQUEADO WHEN 1 THEN 0 ELSE 1 END WHERE N_COMP = ?', [$request->nComp]);

            return ['success' => true, 'message' => $resultado];

          } catch (ModelNotFoundException $ex) {

            return ['success' => true, 'message' => $ex];

          }
    }
    


}
