<?php /** @var App\Proyecto $proyecto */ ?>
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Fecha de entrega</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($proyectos as $proyecto)
                            <tr>
                                <td>{{ $proyecto->nombre }}</td>
                                <td>{{ $proyecto->fecha_entrega }}</td>
                                @if(Auth::user()->estaSuscripto($proyecto))
                                    <td><a href="{{route("proyecto.desuscripcion", $proyecto->id)}}"><button type="button" class="btn btn-danger">Unsubscribe</button></a></td>
                                @else
                                    <td><a href="{{route("proyecto.suscripcion", $proyecto->id)}}"><button type="button" class="btn btn-primary">Subscribe</button></a></td>
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
