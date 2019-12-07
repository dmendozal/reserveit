@extends('layouts.app')
@section('title', 'Formulario de Edicion')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Formulario de Edicion</h4>
                <form action="{{route('reserva.update',[$reserva->idreserva])}}" method="POST"
                    enctype="multipart/form-data">
                    {{ csrf_field() }}
                    @method('PUT')
                    <div class="col-6 mb-15">
                        <label for="est_reser">Estado de la reserva</label>
                        <input type="text" id="est_reser" name="est_reser" class="form-control"
                            value="{{ old('est_reser', isset($reserva) ? $reserva->est_reser : '') }}">
                        @if($errors->has('est_reser'))
                        <em class="invalid-feedback">
                            {{ $errors->first('est_reser') }}
                        </em>
                        @endif
                    </div>
                    <br>
                    <div style="text-align: center; padding-top: 5%">
                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                        <a class="btn btn-danger" href="{{ route('reserva.index') }}">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection
