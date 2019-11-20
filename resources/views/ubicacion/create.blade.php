@extends('layouts.app')
@section('title', 'Formulario de Registro')
@section('content')
<div class="col-lg-12 col-12 mb-20">
    <h6 class="mb-15">Formulario de Registro</h6>
    <form action="{{ route('ubicacion.store')}}" method="POST">
        @csrf
        <div class="row mbn-15">
            <div class="col-6 mb-15">
                <label>Aula
                    <input type="number" class="form-control" placeholder="Ej: 4" name="aula" id="aula" />
                </label>
            </div>
            <div class="col-6 mb-15">
                <label>Piso
                    <input type="number" class="form-control" placeholder="Ej: 1" name="piso" id="piso" />
                </label>
            </div>
        </div>
        <br>
        <center>
        <button type="submit" class="button button-primary button-sm">Registrar Ubicacion</button>
        <a class="button button-danger button-sm" href="{{ route('ubicacion.index') }}">Cancelar</a></center>
    </form>
</div>
@endsection