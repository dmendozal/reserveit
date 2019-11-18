@extends('layouts.app')
@section('title', 'Gestion de Roles')

@section('content')

<div class="panel">
    <br>
        <a href="{{route('roles.create')}}" class="btn btn-mint btn-lg"><i class="demo-pli-add icon-lg"></i></a>
        <div class="panel-heading">
            <center><h3 class="panel-title">Lista de Cargos</h3></center>
        </div>
        <div class="panel-body">
            <table id="demo-dt-basic" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Fecha de Creacion</th>
                        <th>Permisos</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
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
                            <a class="btn btn-info btn-icon" href="{{route('roles.show',$role->id)}}" type="button" ><i class="demo-pli-information icon-lg"></i></a>
                            <a class="btn btn-success btn-icon" href="{{route('roles.edit',$role->id)}}" type="button" ><i class="demo-psi-pen-5 icon-lg"></i></a>

                            <form action="{{ route('roles.destroy', $role->id) }}" method="POST"
                                onsubmit="return confirm('¿Está seguro?');" style="display: inline-block;">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button class="btn btn-danger btn-icon" type="submit" ><i class="demo-psi-recycling icon-lg"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


        <script>
            function Editar(id, nombre) {
        document.getElementById('id1').value=id;
        document.getElementById('nombre1').value=nombre;
    }
        </script>
        @endsection