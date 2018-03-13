<?php /** @var \app\Empleado $empleado */ ?>
@extends('layouts.sidenav')
@section('sidebar')
    <a href="{{route("dg.index")}}">Direcciones</a>
    <a href="#">Usuarios</a>
    <a href="#">Proyectos</a>
@endsection
@section('content')
    <div class="row justify-content-center">
        <div class="col" style="text-align: center">
            <h1>{{ $dg->nombre }}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-auto" style="padding: 30px">
            <table class="table">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Documento</th>
                    <th>Proyectos</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($dg->empleados as $empleado)
                        <tr>
                            <td>{{ $empleado->id }}</td>
                            <td>{{ $empleado->nombre }}</td>
                            <td>{{ $empleado->apellido }}</td>
                            <td>{{ $empleado->documento }}</td>
                            <td  style>
                                <a href="{{route("proyecto.empleado",$empleado->id)}}">
                                    <i class="fas fa-external-link-alt"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
