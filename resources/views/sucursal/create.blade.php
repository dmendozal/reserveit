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
                <form action="{{route('sucursal.store')}}" method="POST" enctype="multipart/form-data"
                    class="smart-form" role="form">
                    @csrf
                    {{ csrf_field() }}
                    <h4 class="card-title">Sucursal</h4>
                    <div class="row">
                        <div class="col-6 mb-15">
                            <label for="nombre_sucursal">Nombre de Sucursal</label>
                            <input type="text" id="nombre_sucursal" name="nombre_sucursal" class="form-control"
                                value="{{ Auth::user()->encargadoEmpresa->empresa[0]->razon_social }} - " autofocus>
                            @if($errors->has('nombre_sucursal'))
                            <em class="invalid-feedback">
                                {{ $errors->first('nombre_sucursal') }}
                            </em>
                            @endif
                        </div>
                        <div class="col-6 mb-15">
                            <label for="direccion">Direccion</label>
                            <input type="text" id="direccion" name="direccion" class="form-control"
                                value="{{ old('direccion', isset($sucursal) ? $sucursal->direccion : '') }}">
                            @if($errors->has('direccion'))
                            <em class="invalid-feedback">
                                {{ $errors->first('direccion') }}
                            </em>
                            @endif
                        </div>
                        <div class="col-6 mb-15">
                            <label for="telefono_sucursal">Telefono</label>
                            <input type="text" id="telefono_sucursal" name="telefono_sucursal" class="form-control"
                                value="{{ old('telefono_sucursal', isset($sucursal) ? $sucursal->telefono_sucursal : '') }}">
                            @if($errors->has('telefono_sucursal'))
                            <em class="invalid-feedback">
                                {{ $errors->first('telefono_sucursal') }}
                            </em>
                            @endif
                        </div>

                    </div>
                    <h4 class="card-title">Encargado de Sucursal</h4>
                    <div class="row">
                        <div class="col-6 mb-15">
                            <label for="nombre">Nombre</label>
                            <input type="text" id="nombre" name="nombre" class="form-control"
                                value="{{ old('nombre', isset($encargadoSucursal) ? $encargadoSucursal->nombre : '') }}">
                            @if($errors->has('nombre'))
                            <em class="invalid-feedback">
                                {{ $errors->first('nombre') }}
                            </em>
                            @endif
                        </div>
                        <div class="col-6 mb-15">
                            <label for="apellido">Apellido</label>
                            <input type="text" id="apellido" name="apellido" class="form-control"
                                value="{{ old('apellido', isset($encargadoSucursal) ? $encargadoSucursal->apellido : '') }}">
                            @if($errors->has('apellido'))
                            <em class="invalid-feedback">
                                {{ $errors->first('apellido') }}
                            </em>
                            @endif
                        </div>
                        <div class="col-6 mb-15">
                            <label for="ci">Carnet de Identidad</label>
                            <input type="text" id="ci" name="ci" class="form-control"
                                value="{{ old('ci', isset($encargadoSucursal) ? $encargadoSucursal->ci : '') }}">
                            @if($errors->has('ci'))
                            <em class="invalid-feedback">
                                {{ $errors->first('ci') }}
                            </em>
                            @endif
                        </div>
                        <div class="col-6 mb-15">
                            <label for="email">Email</label>
                            <input type="text" id="email" name="email" class="form-control"
                                value="{{ old('email', isset($encargadoEmpresa) ? $encargadoEmpresa->email : '') }}">
                            @if($errors->has('email'))
                            <em class="invalid-feedback">
                                {{ $errors->first('email') }}
                            </em>
                            @endif
                        </div>
                        <div class="col-6 mb-15">
                            <label for="telefono">Telefono</label>
                            <input type="text" id="telefono" name="telefono" class="form-control"
                                value="{{ old('telefono', isset($empresa) ? $encargadoEmpresa->telefono : '') }}">
                            @if($errors->has('telefono'))
                            <em class="invalid-feedback">
                                {{ $errors->first('telefono') }}
                            </em>
                            @endif
                        </div>
                        <div class="col-6 mb-15">
                            <label for="password">Contraseña</label>
                            <input type="password" id="password" name="password" class="form-control"
                                value="{{ old('password', isset($empresa) ? $empresa->password : '') }}">
                            @if($errors->has('password'))
                            <em class="invalid-feedback">
                                {{ $errors->first('password') }}
                            </em>
                            @endif
                        </div>
                        <div class="col-6 mb-15">
                            <label for="password_confirmation">Repetir Contraseña</label>
                            <input type="password" id="password_confirmation" name="password_confirmation"
                                class="form-control"
                                value="{{ old('password_confirmation', isset($empresa) ? $empresa->password : '') }}">
                            @if($errors->has('password_confirmation'))
                            <em class="invalid-feedback">
                                {{ $errors->first('password_confirmation') }}
                            </em>
                            @endif
                        </div>
                    </div>
                    <div style="text-align: center; padding-top: 5%">
                        <button type="submit" class="btn btn-primary">Registrar Sucursal</button>
                        <a class="btn btn-danger" href="{{ route('sucursal.index') }}">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



@endsection