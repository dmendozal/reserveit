@extends('layouts.app')
@section('title', 'Formulario de Registro')

@section('content')
<div class="col-lg-12 col-12 mb-20">
    <h6 class="mb-15">Formulario de Registro</h6>
    <form action="{{ route('estado.store')}}" method="POST">
        @csrf
        <div class="row mbn-15">
            <div class="col-6 mb-15">
                <label>Sigla
                    <input type="text" class="form-control" placeholder="Ej: B.E" name="sigla" id="sigla" />
                </label>
            </div>
            <div class="col-6 mb-15">
                <label>Nombre
                    <input type="text" class="form-control" placeholder="Ej: Buen Estado" name="nombre" id="nombre" />
                </label>
            </div>
        </div>
        <br>
        <center>
        <button type="submit" class="button button-primary button-sm">Registrar Empresa</button>
        <a class="button button-danger button-sm" href="{{ route('estado.index') }}">Cancelar</a></center>
    </form>
</div>
@endsection