@extends('layouts.sidenav')
@section('sidebar')
    <a href="{{route("dg.index")}}">Direcciones</a>
    <a href="#">Usuarios</a>
    <a href="#">Proyectos</a>
@endsection
@section('content')
    <div class="row justify-content-center">
        <div class="col" style="text-align: center">
            <h1>{{ $empleado->nombre." ".$empleado->apellido }}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-auto" style="padding: 30px">
            <table class="table">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Fecha entrega</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($empleado->proyectos as $proyecto)
                        <tr>
                            <td>{{ $proyecto->id }}</td>
                            <td>{{ $proyecto->nombre }}</td>
                            <td>{{ $proyecto->fecha_entrega }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
