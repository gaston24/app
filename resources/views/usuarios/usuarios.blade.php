@extends('baseNormal')

@section('pageTitle', 'Usuarios')

@section('content')

<div class="table table-sm table-responsive">
    <table class=" mt-5">
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
        <tbody>
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
                        <form action="" class="d-inline" method="POST">
                            @method('PUT')
                            @csrf
                            <button type="submit" class="btn btn-warning btn-sm">Grabar</button>
                        </form>

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
