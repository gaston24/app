@extends('baseEquis')

@section('pageTitle', '- Detalle')

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
                    <input type="date" name="desde" class="form-control form-control-sm" value="">
                </div>

                <div class="col">
                    <input type="date" name="hasta" class="form-control form-control-sm" value="">
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
    <table id="tablaVentas" class="display table-striped table-bordered table-sm" style="width:100%">
            
            <thead>
                <tr>

                    <td class="col-"><h4 id="headNum">NUM</h4></td>
                    
                    <td class="col-"><h4 id="headSuc">SUCURSAL</h4></td>
                    
                    <td class="col-"><h4 id="headCantComp">CANT_COMP</h4></td>
                    
                    <td class="col-"><h4 id="headImporte">IMPORTE</h4></td>
                </tr>
                
            </thead>
            
            <tbody>
                



               

                                
            </tbody>
                
                <tr>
                    <td align="center"><h3>TOTAL</h3></td>
                    <td>
                        <h3> <a id="sucursales"> (Locales) </a> </h3>
                    </td>
                    <td>
                        <h3> <a id="cantComp">   </a> </h3>
                    </td>
                    <td>
                        <h3> <a id="importe"> </a> </h3>
                    </td>
                </tr>
                
            </table>
        
        </div>
        </div>
        </div>

               


@endif




@section('content')