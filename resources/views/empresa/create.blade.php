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
                <form action="{{route('empresa.store')}}" method="POST" enctype="multipart/form-data" class="smart-form"
                    role="form">
                    @csrf
                    {{ csrf_field() }}
                    <h4 class="card-title">Empresa</h4>
                    <div class="row">
                        <div class="col-6 mb-15">
                            <label for="razon_social">Razon Social</label>
                            <input type="text" id="razon_social" name="razon_social" class="form-control"
                                value="{{ old('razon_social', isset($empresa) ? $empresa->razon_social : '') }}"
                                autofocus>
                            @if($errors->has('razon_social'))
                            <em class="invalid-feedback">
                                {{ $errors->first('razon_social') }}
                            </em>
                            @endif
                        </div>
                        <div class="col-6 mb-15">
                            <label for="direccion">Direccion</label>
                            <input type="text" id="direccion" name="direccion" class="form-control"
                                value="{{ old('direccion', isset($empresa) ? $empresa->direccion : '') }}">
                            @if($errors->has('direccion'))
                            <em class="invalid-feedback">
                                {{ $errors->first('direccion') }}
                            </em>
                            @endif
                        </div>
                        <div class="col-6 mb-15">
                            <label for="email_empresa">Email de Empresa</label>
                            <input type="email" id="email_empresa" name="email_empresa" class="form-control"
                                value="{{ old('email_empresa', isset($empresa) ? $empresa->email : '') }}">
                            @if($errors->has('email_empresa'))
                            <em class="invalid-feedback">
                                {{ $errors->first('email_empresa') }}
                            </em>
                            @endif
                        </div>
                        <div class="col-6 mb-15">
                            <label for="mision">Mision</label>
                            <input type="text" id="mision" name="mision" class="form-control"
                                value="{{ old('mision', isset($empresa) ? $empresa->mision : '') }}">
                            @if($errors->has('mision'))
                            <em class="invalid-feedback">
                                {{ $errors->first('mision') }}
                            </em>
                            @endif
                        </div>
                        <div class="col-6 mb-15">
                            <label for="vision">Vision</label>
                            <input type="text" id="vision" name="vision" class="form-control"
                                value="{{ old('vision', isset($empresa) ? $empresa->vision : '') }}">
                            @if($errors->has('vision'))
                            <em class="invalid-feedback">
                                {{ $errors->first('vision') }}
                            </em>
                            @endif
                        </div>
                        <div class="col-6 mb-15">
                            <label for="slogan">Slogan</label>
                            <input type="text" id="slogan" name="slogan" class="form-control"
                                value="{{ old('slogan', isset($empresa) ? $empresa->slogan : '') }}">
                            @if($errors->has('slogan'))
                            <em class="invalid-feedback">
                                {{ $errors->first('slogan') }}
                            </em>
                            @endif
                        </div>
                        <div class="col-6 mb-15">
                            <label for="telefono_empresa">Telefono</label>
                            <input type="text" id="telefono_empresa" name="telefono_empresa" class="form-control"
                                value="{{ old('telefono_empresa', isset($empresa) ? $empresa->telefono_empresa : '') }}">
                            @if($errors->has('telefono_empresa'))
                            <em class="invalid-feedback">
                                {{ $errors->first('telefono_empresa') }}
                            </em>
                            @endif
                        </div>
                        <div class="col-6 mb-15">
                            <label for="sitio_web">Sitio Web</label>
                            <input type="text" id="sitio_web" name="sitio_web" class="form-control"
                                value="{{ old('sitio_web', isset($empresa) ? $empresa->sitio_web : '') }}">
                            @if($errors->has('sitio_web'))
                            <em class="invalid-feedback">
                                {{ $errors->first('sitio_web') }}
                            </em>
                            @endif
                        </div>
                    </div>
                    <h4 class="card-title">Encargado de Empresa</h4>
                    <div class="row">
                        <div class="col-6 mb-15">
                            <label for="nombre">Nombre</label>
                            <input type="text" id="nombre" name="nombre" class="form-control"
                                value="{{ old('nombre', isset($encargadoEmpresa) ? $encargadoEmpresa->nombre : '') }}">
                            @if($errors->has('nombre'))
                            <em class="invalid-feedback">
                                {{ $errors->first('nombre') }}
                            </em>
                            @endif
                        </div>
                        <div class="col-6 mb-15">
                            <label for="apellido">Apellido</label>
                            <input type="text" id="apellido" name="apellido" class="form-control"
                                value="{{ old('apellido', isset($encargadoEmpresa) ? $encargadoEmpresa->apellido : '') }}">
                            @if($errors->has('apellido'))
                            <em class="invalid-feedback">
                                {{ $errors->first('apellido') }}
                            </em>
                            @endif
                        </div>
                        <div class="col-6 mb-15">
                            <label for="ci">Carnet de Identidad</label>
                            <input type="text" id="ci" name="ci" class="form-control"
                                value="{{ old('ci', isset($encargadoEmpresa) ? $encargadoEmpresa->ci : '') }}">
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
                        <button type="submit" class="btn btn-primary">Registrar Empresa</button>
                        <a class="btn btn-danger" href="{{ route('empresa.index') }}">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



@endsection