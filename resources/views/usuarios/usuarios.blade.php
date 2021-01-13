@extends('baseNormal')

@section('pageTitle', 'Usuarios')

@section('content')

<div class="row mt-2 mb-1">
    <div class="col-3"></div>
    <div class="col-6"><input type="text" class="form-control form-control-sm" id="textBox" onkeyup="filtrar()" placeholder="Filtrar" autofocus ></div>
    <div class="col-3"></div>
</div>


<div class="table table-sm table-hover">
    <table class="mt-3">
        <thead>
            <th>Nombre</th>
            <th>Pass</th>
            <th>DSN</th>
            <th>Descripcion</th>
            <th>Cod Cliente</th>
            <th>Nro Sucursal</th>
            <th>Cod Vendedor</th>
            <th>Tango</th>
            <th>Accion</th>

        </thead>
        <tbody id="table">
            @csrf
            @foreach ($todosLosUsuarios as $usuario)
                <tr>
                    <td><small>{{$usuario->NOMBRE}}</small></td>
                    <td><small>{{$usuario->PASS}}</small></td>
                    <td><small>{{$usuario->DSN}}</small></td>
                    <td><small>{{  substr($usuario->DESCRIPCION, 0, 20)  }}</small></td>
                    <td><small>{{$usuario->COD_CLIENT}}</small></td>
                    <td><small>{{$usuario->NRO_SUCURS}}</small></td>
                    <td><small>{{$usuario->COD_VENDED}}</small></td>
                    <td><small>{{$usuario->TANGO}}</small></td>
                    <td>

                            <button type="button" class="btn btn-warning btn-sm" onClick="editar({{$usuario->ID}})">Editar</button>

                        <form action="" class="d-inline" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection
