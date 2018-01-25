@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form action="{{route('empleado.store')}}" method="post">
                {{ csrf_field() }}
                <div class="form-group {{ ($errors->has('dg'))?"has-error":"" }}">
                    <label class="col-md-4 control-label">Dirección General:</label>
                    <div class="col-md-6">
                        <select name="dg" class="form-control">
                            <option value="" selected>Seleccione una DG</option>
                            @foreach($dgs as $dg)
                                <option value="{{ $dg->id }}" {{ old("dg")!="" && old("dg") == $dg->id ? "selected":"" }}>
                                    {{ $dg->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                    <label for="nombre" class="col-md-4 control-label">Nombre</label>

                    <div class="col-md-6">
                        <input id="nombre" type="text" class="form-control" name="nombre"
                               value="{{(old('nombre'))?old("nombre"):"" }}" required>

                        @if ($errors->has('nombre'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nombre') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('apellido') ? ' has-error' : '' }}">
                    <label for="nombre" class="col-md-4 control-label">Apellido</label>

                    <div class="col-md-6">
                        <input id="apellido" type="text" class="form-control" name="apellido" value="{{ old('apellido') }}" required>

                        @if ($errors->has('apellido'))
                            <span class="help-block">
                                <strong>{{ $errors->first('apellido') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('documento') ? ' has-error' : '' }}">
                    <label for="nombre" class="col-md-4 control-label">Documento</label>

                    <div class="col-md-6">
                        <input id="documento" type="text" class="form-control" name="documento" value="{{ old('documento') }}" required>

                        @if ($errors->has('documento'))
                            <span class="help-block">
                                <strong>{{ $errors->first('documento') }}</strong>
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