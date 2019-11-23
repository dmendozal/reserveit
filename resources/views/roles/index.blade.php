@extends('layouts.app')
@section('title', 'Gestion de Roles')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Lista de Roles</h4>
                <a class="btn waves-effect waves-light btn-sm btn-primary" href="{{route('roles.create')}}" type="button" >Registrar Rol</a>
                <div class="table-responsive m-t-40">
                    <table id="example23"
                        class="display nowrap table table-hover table-striped table-bordered"
                        cellspacing="0" width="100%">
                        <thead>
                            <tr>
                            <th>Nombre</th>
                            <th>Fecha de Creacion</th>
                            <th>Permisos</th>
                            <th>Acciones</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                            <th>Nombre</th>
                            <th>Fecha de Creacion</th>
                            <th>Permisos</th>
                            <th>Acciones</th>
                            </tr>
                        </tfoot>
                        <tbody>
                        @foreach ($roles as $role)
                            <tr>
                                <td>{{ $role->name}}</td>
                                <td>{{ $role->created_at}}</td>
                                <td style="width: 800px;">
                                    @foreach($role->permisos as $key => $permiso)
                                    <span class="badge badge-info">{{ $permiso->name }}</span>
                                    @endforeach
                                </td>
                                <td>
                                    <a class="btn btn-info btn-sm" href="{{route('roles.show',$role->id)}}" type="button" >Detalle</a>
                                    <a class="btn waves-effect waves-light btn-sm btn-success" href="{{route('roles.edit',$role->id)}}" type="button" >Editar</a>

                                    <form action="{{ route('roles.destroy', $role->id) }}" method="POST"
                                        onsubmit="return confirm('¿Está seguro?');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button class="btn waves-effect waves-light btn-sm btn-danger" type="submit" >Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
        <script>
            function Editar(id, nombre) {
        document.getElementById('id1').value=id;
        document.getElementById('nombre1').value=nombre;
    }
        </script>
        @endsection