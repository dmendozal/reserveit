@extends('layouts.app')
@section('content')
<div class="col-lg-12 col-12 mb-20">
    <h6 class="mb-15">Formulario de Registro</h6>
    <form action="{{route('empresa.store')}}" method="POST">
        @csrf
        <div class="row mbn-15">
            <div class="col-6 mb-15">
                <label>Razon social
                    <input type="text" class="form-control" placeholder="Ej: Nnombre" name="razon_social"
                        id="razon_social" />
                </label>
            </div>
            <div class="col-6 mb-15">
                <label>Correo Electronico
                    <input type="email" class="form-control" placeholder="Ej: ejemplo@hotmail.com" name="email" />
                </label>
            </div>
            <div class="col-6 mb-15">
                <label>Direccion
                    <input type="text" class="form-control" placeholder="Ej: Av. Ejemplo" name="direccion" />
                </label>
            </div>
            <div class="col-6 mb-15">
                <label>Telefono
                    <input type="tel" class="form-control" placeholder="Ej: 78005555" name="telefono" />
                </label>
            </div>
        </div>
        <br>
        <center>
        <button type="submit" class="button button-primary button-sm">Registrar Empresa</button>
        <a class="button button-danger button-sm" href="{{ route('empresa.index') }}">Cancelar</a></center>
    </form>
</div>
@endsection