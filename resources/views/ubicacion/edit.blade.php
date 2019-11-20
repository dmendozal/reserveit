@extends('layouts.app')
@section('title', 'Formulario de Edicion')
@section('content')
<div class="col-lg-12 col-12 mb-20">
    <h6 class="mb-15">Formulario de Edicion</h6>
    <form action="{{route('ubicacion.update',[$ubicacion->idubicacion])}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row mbn-15">
            <div class="col-6 mb-15">
                <label>Aula
                    <input type="number" class="form-control" name="aula" id="aula" value="{{ $ubicacion->aula }}" />
                </label>
            </div>
            <div class="col-6 mb-15">
                <label>Piso
                    <input type="number" class="form-control" name="piso" id="piso" value="{{ $ubicacion->piso }}" />
                </label>
            </div>
        </div>
        <br>
        <center>
                <button type="submit" class="button button-primary button-sm">Guardar Cambios</button>
                <a class="button button-danger button-sm" href="{{ route('ubicacion.index') }}">Cancelar</a></center>
    </form>
</div>
@endsection