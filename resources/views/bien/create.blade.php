@extends('layouts.app')
@section('title', 'Formulario de Registro')
@section('content')
<div class="col-lg-12 col-12 mb-20">
    <h6 class="mb-15">Formulario de Registro</h6>
    <form action="{{ route('bien.store')}}" method="POST">
        @csrf
        <div class="row mbn-15">
            <div class="col-6 mb-15">
                <label>Nombre
                    <input type="text" class="form-control" placeholder="Ej: Silla" name="nombre" id="nombre" />
                </label>
            </div>
            <div class="col-6 mb-15">
                <label>Descripcion
                    <input type="text" class="form-control" placeholder="Ej: APARATO TELEFONICO COLOR BLANCO"
                        name="descripcion" id="descripcion" />
                </label>
            </div>
        </div>
        <br>
        <center>
            <button type="submit" class="button button-primary button-sm">Registrar Bien</button>
            <a class="button button-danger button-sm" href="{{ route('bien.index') }}">Cancelar</a></center>
    </form>
</div>


@endsection