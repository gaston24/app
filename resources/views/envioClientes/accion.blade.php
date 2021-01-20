@extends('baseNormal')

@section('pageTitle', 'Envio de clientes')
@section('content')

<div class="row mt-5">

    <div class="col-2"></div>
    <div class="col-8">


        <h2 align="center">Que desea hacer?</h2></br>
    
        <nav >
        
            <button type="button" class="btn btn-primary btn-lg btn-block" onclick="location.href='envioClientes/crearElige'">Crear Cliente</button>
            <button type="button" class="btn btn-secondary btn-lg btn-block" onclick="location.href='envioClientes/enviarElige'">Enviar Cliente</button>
        
        </nav>


    </div>
    <div class="col-2"></div>


</div>

    
@endsection