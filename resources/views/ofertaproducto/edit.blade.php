@extends('layouts.app')
@section('title', 'Formulario de Edicion')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Formulario de Edicion</h4>
                <form action="{{route('ofertaproducto.update',[$ofertaproducto->idoferta_producto])}}" method="POST"
                    enctype="multipart/form-data">
                    {{ csrf_field() }}
                    @method('PUT')
                    <div class="col-6 mb-15">
                        <label for="cant_disp">Cantidad</label>
                        <input type="number" id="cant_disp" name="cant_disp" class="form-control"
                            value="{{ old('cant_disp', isset($ofertaproducto) ? $ofertaproducto->cant_disp : '') }}">
                        @if($errors->has('cant_disp'))
                        <em class="invalid-feedback">
                            {{ $errors->first('cant_disp') }}
                        </em>
                        @endif
                    </div>
                    <div class="col-6 mb-15">
                        <label for="precio">Precio</label>
                        <input type="text" id="precio" name="precio" class="form-control"
                            value="{{ old('precio', isset($ofertaproducto) ? $ofertaproducto->precio : '') }}">
                        @if($errors->has('precio'))
                        <em class="invalid-feedback">
                            {{ $errors->first('precio') }}
                        </em>
                        @endif
                    </div>
                    <div class="col-6 mb-15">
                        <label for="hora_inicio">Hora de Inicio</label>
                        <input type="text" id="hora_inicio" name="hora_inicio" class="form-control"
                            value="{{ old('hora_inicio', isset($ofertaproducto) ? $ofertaproducto->hora_inicio : '') }}">
                        @if($errors->has('hora_inicio'))
                        <em class="invalid-feedback">
                            {{ $errors->first('hora_inicio') }}
                        </em>
                        @endif
                    </div>
                    <div class="col-6 mb-15">
                        <label for="hora_fin">Hora de Fin</label>
                        <input type="text" id="hora_fin" name="hora_fin" class="form-control"
                            value="{{ old('hora_fin', isset($ofertaproducto) ? $ofertaproducto->hora_fin : '') }}">
                        @if($errors->has('hora_fin'))
                        <em class="invalid-feedback">
                            {{ $errors->first('hora_fin') }}
                        </em>
                        @endif
                    </div>
                    <br>
                    <div style="text-align: center; padding-top: 5%">
                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                        <a class="btn btn-danger" href="{{ route('usuarios.index') }}">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection
