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
                    <form action="{{route('usuarios.store')}}" method="POST" enctype="multipart/form-data" class="smart-form"
        role="form" >
        @csrf
        {{ csrf_field() }}
            <div class="col-6 mb-15">
                <label for="name">Nombre de Usuario</label>
                <input type="text" id="name" name="name" class="form-control"
                    value="{{ old('name', isset($user) ? $user->name : '') }}" autofocus>
                @if($errors->has('name'))
                <em class="invalid-feedback">
                    {{ $errors->first('name') }}
                </em>
                @endif
            </div>
            <div class="col-6 mb-15">
                <label for="email">Correo Electronico</label>
                <input type="email" id="email" name="email" class="form-control"
                    value="{{ old('email', isset($user) ? $user->email : '') }}">
                @if($errors->has('email'))
                <em class="invalid-feedback">
                    {{ $errors->first('email') }}
                </em>
                @endif
            </div>
            <div class="col-6 mb-15">
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" class="form-control"
                    value="{{ old('password', isset($user) ? $user->password : '') }}">
                @if($errors->has('password'))
                <em class="invalid-feedback">
                    {{ $errors->first('password') }}
                </em>
                @endif
            </div>
            <div class="col-6 mb-15">
                <label for="password_confirmation">Repetir Contraseña</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control"
                    value="{{ old('password_confirmation', isset($user) ? $user->password : '') }}">
                @if($errors->has('password_confirmation'))
                <em class="invalid-feedback">
                    {{ $errors->first('password_confirmation') }}
                </em>
                @endif
            </div>
            <div class="col-6 mb-15">
                <label>Apellido</label>
                <input type="text" class="form-control" placeholder="Apellido" name="apellido" />
            </div>
            <div class="col-6 mb-15">
                <label>Direccion</label>
                <input type="text" class="form-control" placeholder="Direccion" name="direccion" />
            </div>
            <div class="col-6 mb-15">
                <label>Telefono o Celular</label>
                <input type="text" class="form-control" placeholder="Telefono o Celular" name="telefono" />
            </div>
            <div class="col-6 mb-15">
                <label for="roles">Roles
                    <span class="btn btn-info btn-sm select-all" style="padding-top: 0%">Select all</span>
                    <span class="btn btn-info btn-sm deselect-all" style="padding-top: 0%">Deselect
                        all</span>
                </label>
                <select name="roles[]" id="roles" class="form-control select2" multiple="multiple">
                    @foreach($roles as $id => $roles)
                    <option value="{{ $id }}"
                        {{ (in_array($id, old('roles', [])) || isset($user) && $user->roles->contains($id)) ? 'selected' : '' }}>
                        {{ $roles }}
                    </option>
                    @endforeach
                </select>
                @if($errors->has('roles'))
                <em class="invalid-feedback">
                    {{ $errors->first('roles') }}
                </em>
                @endif
            </div>
        <center>
            <div class="col-6 mb-15"><label>Fotografia<input type="file" class="dropify" name="foto" /></label></div>
        </center>
        <div style="text-align: center; padding-top: 5%">
            <button type="submit" class="btn btn-primary">Registrar Usuario</button>
            <a class="btn btn-danger" href="{{ route('usuarios.index') }}">Cancelar</a>
        </div>
    </form>

            </div>
        </div>
    </div>
</div>



@endsection