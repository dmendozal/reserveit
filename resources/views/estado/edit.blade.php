@extends('layouts.app')
@section('content')
<div class="col-lg-12 col-12 mb-20">
    <h6 class="mb-15">Formulario de Edicion</h6>
    <form action="{{route('estado.update',[$estado->idestado])}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row mbn-15">
            <div class="col-6 mb-15">
                <label>Sigla
                    <input type="text" class="form-control" name="sigla" id="sigla" value="{{ $estado->sigla }}" />
                </label>
            </div>
            <div class="col-6 mb-15">
                <label>Nombre
                    <input type="text" class="form-control" name="nombre" id="nombre" value="{{ $estado->nombre }}" />
                </label>
            </div>
        </div>
        <br>
        <center>
                <button type="submit" class="button button-primary button-sm">Guardar Cambios</button>
                <a class="button button-danger button-sm" href="{{ route('estado.index') }}">Cancelar</a></center>
    </form>
</div>
@endsection