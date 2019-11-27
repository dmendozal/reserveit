@extends('layouts.app')
@section('title', 'Gestion de Roles')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Lista de Usuarios</h4>
                <a class="btn waves-effect waves-light btn-sm btn-primary" href="{{route('usuarios.create')}}"
                    type="button">Registrar Usuario</a>
                <div class="table-responsive m-t-40">
                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered"
                        cellspacing="0" width="100%">
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
                                <td>{{-- <img src="{{  }}$user->foto}}" height="100px" width="100px" /> --}}</td>

                                <td>
                                    <a class="btn waves-effect waves-light btn-sm btn-success"
                                        href="{{ route('usuarios.edit',$user->id)}}" type="button">Editar</a>
                                    <form action="{{ route('usuarios.destroy', $user->id) }}" method="POST"
                                        onsubmit="return confirm('¿Está seguro?');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button class="btn waves-effect waves-light btn-sm btn-danger"
                                            type="submit">Eliminar</button>
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

@endsection