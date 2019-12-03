@extends('layouts.app')
@section('title', 'Formulario de Registro')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Formulario de Registro</h4>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <h6>Por favor corrige los errores debajo:</h6>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form action="{{route('ofertaproducto.store')}}" method="POST" enctype="multipart/form-data"
                    class="smart-form" role="form">
                    @csrf
                    {{ csrf_field() }}
                    <div class="col-6 mb-15">
                        <label for="cant_disp">Cantidad Disponible</label>
                        <input type="number" id="cant_disp" name="cant_disp" class="form-control"
                            value="{{ old('cant_disp', isset($ofertaProducto) ? $ofertaProducto->cant_disp : '') }}"
                            autofocus>
                        @if($errors->has('cant_disp'))
                        <em class="invalid-feedback">
                            {{ $errors->first('cant_disp') }}
                        </em>
                        @endif
                    </div>
                    <div class="col-6 mb-15">
                        <label for="precio">Precio</label>
                        <input type="text" id="precio" name="precio" class="form-control"
                            value="{{ old('precio', isset($ofertaProducto) ? $ofertaProducto->precio : '') }}">
                        @if($errors->has('precio'))
                        <em class="invalid-feedback">
                            {{ $errors->first('precio') }}
                        </em>
                        @endif
                    </div>
                    <div class="col-6 mb-15">
                        <label for="hora_inicio">Hora de Inicio</label>
                        <input type="time" id="hora_inicio" name="hora_inicio" class="form-control"
                            value="{{ old('hora_inicio', isset($ofertaProducto) ? $ofertaProducto->hora_inicio : '') }}">
                        @if($errors->has('hora_inicio'))
                        <em class="invalid-feedback">
                            {{ $errors->first('hora_inicio') }}
                        </em>
                        @endif
                    </div>
                    <div class="col-6 mb-15">
                        <label for="hora_fin">Hora de Fin</label>
                        <input type="time" id="hora_fin" name="hora_fin" class="form-control"
                            value="{{ old('hora_fin', isset($ofertaProducto) ? $ofertaProducto->hora_fin : '') }}">
                        @if($errors->has('hora_fin'))
                        <em class="invalid-feedback">
                            {{ $errors->first('hora_fin') }}
                        </em>
                        @endif
                    </div>
                    <div class="col-6 mb-15">
                        <label for="fkidproducto">Producto </label>
                        <select name="fkidproducto" id="fkidproducto" class="form-control ">
                            @foreach($productos as $id => $producto)
                            <option value="{{ $producto->idproducto }}">
                                {{ $producto->nombre }}
                            </option>
                            @endforeach
                        </select>
                        @if($errors->has('fkidproducto'))
                        <em class="invalid-feedback">
                            {{ $errors->first('fkidproducto') }}
                        </em>
                        @endif
                    </div>
                    <div style="text-align: center; padding-top: 5%">
                        <button type="submit" class="btn btn-primary">Registrar Producto</button>
                        <a class="btn btn-danger" href="{{ route('producto.index') }}">Cancelar</a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>



@endsection