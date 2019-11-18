@extends('layouts.app')
@section('title', 'Gestion de Roles')

@section('content')

<div class="panel">
    <br>
        <a href="{{route('usuarios.create')}}" class="btn btn-mint btn-lg"><i class="demo-pli-add icon-lg"></i></a>
        <div class="panel-heading">
            <center><h3 class="panel-title">Lista de Usuarios</h3></center>
        </div>
        <div class="panel-body">
            <table id="demo-dt-basic" class="table table-striped table-bordered" cellspacing="0" width="100%">
                 <thead>
                            <tr>
                                <th>Nro</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Email</th>
                                <th>Cargo</th>
                                <th>Fotografia</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($usuarios as $key =>$user)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->apellido}}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                    @foreach($user->roles as $key => $rol)
                                    <span class="badge badge-info">{{ $rol->name }}</span>
                                    @endforeach
                                </td>
                                <td><img src="{{$user->foto}}" height="100px" width="100px" /></td>

                                <td>
                                    <a class="btn btn-success btn-icon" href="{{ route('usuarios.edit',$user->id)}}" type="button" ><i class="demo-psi-pen-5 icon-lg"></i></a>
                                    <form action="{{ route('usuarios.destroy', $user->id) }}" method="POST"
                                        onsubmit="return confirm('¿Está seguro?');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button class="btn btn-danger btn-icon" type="submit" ><i class="demo-psi-recycling icon-lg"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Nro</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Email</th>
                                <th>Cargo</th>
                                <th>Fotografia</th>
                                <th>Opciones</th>
                            </tr>
                        </tfoot>
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