@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <form action="{{route('proyecto.store')}}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                        <label for="nombre" class="col-md-4 control-label">Nombre del proyecto</label>

                        <div class="col-md-6">
                            <input id="nombre" type="text" class="form-control" name="nombre" value="{{ old('nombre') }}" required>

                            @if ($errors->has('nombre'))
                                <span class="help-block">
                                <strong>{{ $errors->first('nombre') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('fecha_entrega') ? ' has-error' : '' }}">
                        <label for="nombre" class="col-md-4 control-label">Fecha de entrega</label>

                        <div class="col-md-6">
                            <input id="fecha_entrega" type="date" class="form-control" name="fecha_entrega" value="{{ old('fecha_entrega') }}" required>

                            @if ($errors->has('fecha_entrega'))
                                <span class="help-block">
                                <strong>{{ $errors->first('fecha_entrega') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Enviar
                            </button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection