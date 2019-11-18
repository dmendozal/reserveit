@extends('layouts.app')
@section('title', 'Gestion de Roles')

@section('content')
<div class="row">
        <div class="col-lg-12">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Registro de Nuevo Cargo</h3>
                </div>
                <div class="panel-body">
            <form action="{{route('roles.update',$role->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group" style="padding-bottom: 1%">
                    <label for="name">Rol</label>
                    <input type="name" id="name" name="name" class="form-control"
                        value="{{ old('name', isset($role) ? $role->name : '') }}">
                    @if($errors->has('name'))
                    <em class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </em>
                    @endif
                </div>
                <div class="form-group {{ $errors->has('permissions') ? 'has-error' : '' }}" style="padding-bottom: 3%">
                    <label for="permissions">Permisos
                        <span class="btn btn-info btn-sm select-all" style="padding-top: 0%">Select all</span>
                        <span class="btn btn-info btn-sm deselect-all" style="padding-top: 0%">Deselect
                            all</span></label>
                    <select name="permissions[]" id="permissions" class="form-control select2" multiple="multiple">
                        @foreach($permissions as $id => $permissions)
                        <option value="{{ $id }}"
                            {{ (in_array($id, old('permissions', [])) || isset($role) && $role->permisos->contains($id)) ? 'selected' : '' }}>
                            {{ $permissions }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="pull-right">
                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                    <a class="btn btn-danger" href="{{ route('roles.index') }}">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</div>

</div>



@endsection