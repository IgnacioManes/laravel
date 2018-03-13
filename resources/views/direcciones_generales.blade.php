@extends('layouts.sidenav')
@section('sidebar')
    <a href="{{route("dg.index")}}"><strong style="color:#d3e0e9">Direcciones</strong></a>
    <a href="#">Usuarios</a>
    <a href="#">Proyectos</a>
@endsection
@section('content')
    <div class="row justify-content-center">
        <div class="col" style="text-align: center">
            <h1>Direcciones Generales</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-auto" style="padding: 30px">
            <table class="table">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                    @foreach($dgs as $dg)
                        <tr>
                            <td>{{ $dg->id }}</td>
                            <td>{{ $dg->nombre }}</td>
                            <td><a href="{{route("dg.detalle", $dg->id)}}">
                                    <i class="fas fa-search"></i></a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
