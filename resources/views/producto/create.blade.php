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
                <form action="{{route('producto.store')}}" method="POST" enctype="multipart/form-data"
                    class="smart-form" role="form">
                    @csrf
                    {{ csrf_field() }}
                    <div class="col-6 mb-15">
                        <label for="nombre">Nombre de Producto</label>
                        <input type="text" id="nombre" name="nombre" class="form-control"
                            value="{{ old('nombre', isset($producto) ? $producto->nombre : '') }}" autofocus>
                        @if($errors->has('nombre'))
                        <em class="invalid-feedback">
                            {{ $errors->first('nombre') }}
                        </em>
                        @endif
                    </div>
                    <div class="col-6 mb-15">
                        <label for="descripcion">Descripcion</label>
                        <input type="text" id="descripcion" name="descripcion" class="form-control"
                            value="{{ old('descripcion', isset($producto) ? $producto->descripcion : '') }}">
                        @if($errors->has('descripcion'))
                        <em class="invalid-feedback">
                            {{ $errors->first('descripcion') }}
                        </em>
                        @endif
                    </div>
                    <div class="col-6 mb-15">
                        <label for="imagen">Imagen</label>
                        <input type="text" id="imagen" name="imagen" class="form-control"
                            value="{{ old('imagen', isset($producto) ? $producto->imagen : '') }}">
                        @if($errors->has('imagen'))
                        <em class="invalid-feedback">
                            {{ $errors->first('imagen') }}
                        </em>
                        @endif
                    </div>
                    <div class="col-6 mb-15">
                        <label for="fkidcategoria">Categoria </label>
                        <select name="fkidcategoria" id="fkidcategoria" class="form-control ">
                            @foreach($categorias as $id => $categoria)
                            <option value="{{ $categoria->idcategoria }}">
                                {{ $categoria->nombre }}
                            </option>
                            @endforeach
                        </select>
                        @if($errors->has('fkidcategoria'))
                        <em class="invalid-feedback">
                            {{ $errors->first('fkidcategoria') }}
                        </em>
                        @endif
                    </div>
                    <input type="text" id="fkidempresa" name="fkidempresa" class="form-control"
                        value="{{ Auth::user()->encargadoEmpresa->empresa[0]->idempresa ?? Auth::user()->encargadoSucursal->sucursal[0]->encargadoEmpresa->empresa->idempresa  }}"
                        hidden>
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