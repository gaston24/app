@extends('baseNormal')

@section('pageTitle', 'Elija accion')
@section('content')

<div class="row mt-5">

    <div class="col-2"></div>
    <div class="col-8">


        <h2 align="center">Que desea hacer?</h2></br>
    
        <nav >
        
            <button type="button" class="btn btn-primary btn-lg btn-block" onclick="location.href='crear.php?cod=AS'">Directores</button>
            <button type="button" class="btn btn-secondary btn-lg btn-block" onclick="location.href='crear.php?cod=GT'">Locales</button>
            <button type="button" class="btn btn-primary btn-lg btn-block" onclick="location.href='crear.php?cod=E'">Empleados</button>
            <button type="button" class="btn btn-secondary btn-lg btn-block" onclick="location.href='crear.php?cod=%'">Otros</button>
            
        
        </nav>


    </div>
    <div class="col-2"></div>


</div>

    
@endsection