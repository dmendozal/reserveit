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
                        <input type="text" id="" name="estado" class="form-control" value="0" style="display: none"/>
                        <select class="form-control custom-select" data-placeholder="Choose a Category" name="est_reser" tabindex="1">
                                <option value="Terminado">Terminado</option>
                                <option value="En proceso">En proceso</option>
                        </select>
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
