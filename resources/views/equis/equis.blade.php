@extends('baseEquis')

@section('pageTitle', '- Detalle')

@section('content')

@php

    $mytime = Carbon\Carbon::now();

@endphp

    
@if (!isset($todos))
    @php
        $desde = $mytime->toDateString();
        $hasta = $mytime->toDateString();
    @endphp
@else
    @php
        $desde = $_GET['desde'];
        $hasta = $_GET['hasta'];
    @endphp
@endif     




<header>


    <form action="{{ url('/equis') }}" method="GET">
        
        @method('GET')
        @csrf


            <div class="row mt-3 mb-2">

                <div class="col">
                    <input type="date" name="desde" class="form-control form-control-sm" value="{{$desde}}">
                </div>

                <div class="col">
                    <input type="date" name="hasta" class="form-control form-control-sm" value="{{$hasta}}">
                </div>

                <div class="col">
                    <button type="submit" class="btn btn-primary btn-sm">
                        Consultar
                    </button>
                </div>

            </div>

        
    </form>
</header>


@if (isset($todos))
 
    
<div class="row">
    <div class="col-lg-12">
    <div class="table-responsive">

    <div class="row mt-1">

        <div class="col-3">
        </div>
        <div class="col-6">
            <input type="text" class="form-control form-control-sm" id="textBox" onkeyup="filtrar()" placeholder="Filtrar" autofocus >
        </div>
        <div class="col-3">
            <button type="submit" class="btn btn-info btn-sm mb-2">Actualizar</button>
        </div>                        

    </div>



    <table id="tablaEquis" class="table table-sm table-hover" style="width:100%">
            
            <thead>
                <tr>

                    <td class="col-"><h4 >FECHA</h4></td>
                    
                    <td class="col-"><h4 >RAZON SOCIAL</h4></td>
                    
                    <td class="col-"><h4 >N COMP</h4></td>
                    
                    <td class="col-"><h4 >CANT ART</h4></td>
                    
                    <td class="col-"><h4 >IMPORTE</h4></td>
                    
                    <td class="col-"><h4 >NUM GUIA</h4></td>

                    <td class="col-"><h4 >SELEC</h4></td>
                </tr>
                
            </thead>
            
            <tbody>

                @foreach ($todos as $todo)

                <tr>
                    <td>{{Carbon\Carbon::parse($todo->FECHA_MOV)->format('Y-m-d')}}</td>
                    <td>{{$todo->RAZON_SOCI}}</td>
                    <td>{{$todo->N_COMP}}</td>
                    <td>{{number_format($todo->CANT_ART , 0, '', '.')}}</td>
                    <td>{{number_format($todo->IMPORTE_TO , 0, '', '.')}}</td>
                    <td>{{$todo->GC_GDT_NUM_GUIA}}</td>
                    <td>
                        <input type="checkbox" onclick="cambiar('{{$todo->N_COMP}}')" <?php if($todo->CHEQUEADO==1){echo 'checked';} ?>>
                    </td>
                </tr>
                    
                @endforeach
                



               

                                
            </tbody>
                
            </table>
   
        
        </div>
        </div>
        </div>

               


@endif




@endsection