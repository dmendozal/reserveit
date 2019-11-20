@extends('layouts.app')
@section('content')
<div class="col-lg-12 col-12 mb-20">
    <h6 class="mb-15">Formulario de Edicion</h6>
    <form action="{{route('empresa.update',[$empresa->idempresa])}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row mbn-15">
            <div class="col-6 mb-15">
                <label>Razon social
                    <input type="text" class="form-control" name="razon_social" id="razon_social"
                        value={{ $empresa->razon_social }} />
                </label>
            </div>
            <div class="col-6 mb-15">
                <label>Correo Electronico
                    <input type="email" class="form-control" name="email" id="email" value={{ $empresa->email }} />
                </label>
            </div>
            <div class="col-6 mb-15">
                <label>Direccion
                    <input type="text" class="form-control" name="direccion" id="direccion"
                        value={{ $empresa->direccion }} />
                </label>
            </div>
            <div class="col-6 mb-15">
                <label>Telefono
                    <input type="tel" class="form-control" name="telefono" id="telefono"
                        value={{ $empresa->telefono }} />
                </label>
            </div>
        </div>
        <br>
        <center>
                <button type="submit" class="button button-primary button-sm">Guardar Cambios</button>
                <a class="button button-danger button-sm" href="{{ route('empresa.index') }}">Cancelar</a></center>
    </form>
</div>
@endsection