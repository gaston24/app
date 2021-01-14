<?php

namespace App\Http\Controllers;
use App\Models\Equis;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class EquisController extends Controller
{
    public function traerTodos(Request $request){


        // return $request;

        if(isset($request)){

            // return 'null';

            return view('equis.equis');
              
            
        }else{

            return 'not null';
            
            // try {
            //     $todos = Equis::
            //             // where('FECHA_MOV', '>=', $request->desde)
            //             // ->where('FECHA_MOV', '<=', $request->hasta)
            //             // ->where('COD_PRO_CL', '=', $request->codClient)
            //             orderBy('N_COMP')
            //             ->get();
    
            //     return view('equis.equis', compact('todos'));
    
            // } catch (\Throwable $th) {
    
            //     throw $th;
    
            // } 

        }



         
    }

    


}
