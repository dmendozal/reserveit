@extends('layouts.app')
@section('title', 'Formulario de registro')
@section('content')
<div class="col-lg-12 col-12 mb-20">
    <h6 class="mb-15">Formulario de Registro</h6>
    {{-- @if ($errors->any())
    <div class="alert alert-danger">
        <h6>Por favor corrige los errores debajo:</h6>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
    @endforeach
    </ul>
</div>
@endif --}}
<form action="{{route('activo.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row mbn-15">
        <div class="col-6 mb-15 ">
            <label for="codigo">Codigo </label>
            <input type="text" class="form-control" placeholder="U14-XXXXXX" name="codigo" id="codigo" required />
            @if($errors->has('codigo'))
            <em class="invalid-feedback">
                <p>{{ $errors->first() }}</p>
            </em>
            @endif
        </div>
        <div class="col-6 mb-15">
            <label for="estado">Estado</label>
            <select name="fkidestado" id="estado" class="form-control select2" required>
                <option value="0">
                    --SELECCIONAR--
                </option>
                @foreach($estados as $estado)
                <option value="{{ $estado->idestado }}">
                    {{ $estado->nombre }}
                </option>
                @endforeach
            </select>
        </div>
        <div class="col-6 mb-15">
            <label for="bien">Bien</label>
            <select name="fkidbien" id="bien" class="form-control select2">
                <option value="0">
                    --SELECCIONAR--
                </option>
                @foreach($bienes as $bien)
                <option value="{{ $bien->idbien }}">
                    {{ $bien->nombre }}
                </option>
                @endforeach
            </select>
        </div>
        <div class="col-6 mb-15">
            <label for="ubicacion">Ubicacion</label>
            <select name="fkidubicacion" id="ubicacion" class="form-control select2">
                <option value="0">
                    --SELECCIONAR--
                </option>
                @foreach($ubicaciones as $ubicacion)
                <option value="{{ $ubicacion->idubicacion }}">
                    {{ "Piso: ".$ubicacion->piso." - Aula: ".$ubicacion->aula }}</td>
                </option>
                @endforeach
            </select>
        </div>
        <input type="text" name="qr" style="display: none" />
    </div>
    <br>
    <center>
        <button type="submit" class="button button-primary button-sm">Registrar Activo</button>
        <a class="button button-danger button-sm" href="{{ route('activo.index') }}">Cancelar</a></center>
</form>
</div>
@endsection