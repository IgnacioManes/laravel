@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">Perfil</div>
                <div class="panel-body">
                    <a href="{{route("empleado.edit")}}"><button type="button" class="btn btn-primary">Editar Perfil</button></a>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">Crear Proyectos</div>
                <div class="panel-body">
                    <a href="{{route("proyecto.create")}}"><button type="button" class="btn btn-primary">Crear Proyecto</button></a>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">Mis Proyectos</div>

                <div class="panel-body">
                    <a href="{{route("proyecto.index")}}"><button type="button" class="btn btn-primary">Mis Proyectos</button></a>
                </div>
            </div>
            @if(isset(Auth::user()->admin))
                <div class="panel panel-default">
                    <div class="panel-heading">Direcciones Generales</div>

                    <div class="panel-body">
                        <a href="{{route("dg.index")}}"><button type="button" class="btn btn-primary">Direcciones Generales</button></a>
                    </div>
                </div>
            @endif
            <div class="panel panel-default">
                <div class="panel-heading">Mis Proyectos</div>

                <div class="panel-body">
                    <a href="{{route("proyecto.index")}}"><button type="button" class="btn btn-primary">Mis Proyectos</button></a>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">Eliminar cuenta</div>

                <div class="panel-body">
                    <form action="{{route("user.destroy")}}" method="post">
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-primary">Eliminar cuenta</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
