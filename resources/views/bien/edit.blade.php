@extends('layouts.app')
@section('title', 'Formulario de Edicion')
@section('content')
<div class="col-lg-12 col-12 mb-20">
    <h6 class="mb-15">Formulario de Edicion</h6>
    <form action="{{route('bien.update',[$bien->idbien])}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row mbn-15">
            <div class="col-6 mb-15">
                <label>Nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre" value="{{ $bien->nombre }}" />

            </div>
            <div class="col-6 mb-15">
                <label>Descripcion
                    <input type="text" class="form-control" name="descripcion" id="descripcion"
                        value="{{ $bien->descripcion }}" />
                </label>
            </div>
        </div>
        <br>
        <button type="submit" class="button button-primary button-sm">Guardar Cambios</button>
        <a class="button button-danger button-sm" href="{{ route('bien.index') }}">Cancelar</a>
    </form>
</div>
@endsection