@extends('layouts.app')
@section('title', 'Detalle de Usuario')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                    <h4 class="card-title">Perfil :   {{ $users->name }} </h4>
            <a class="btn btn-success float-right" href="{{route('usuarios.edit',$users->id)}}">Editar
                Perfil</a>

       <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            Nombre
                        </th>
                        <td>
                            {{ $users->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Apellido
                        </th>
                        <td>
                            {{ $users->apellido }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Direccion
                        </th>
                        <td>
                            {{ $users->direccion }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Telefono
                        </th>
                        <td>
                            {{ $users->telefono }}
                        </td>
                    </tr>

                    <tr>
                        <th>
                            Foto
                        </th>
                        <td>
                            <img src="{{ asset($users->foto)}}" height="200px" width="auto" />
                        </td>
                    </tr>
                </tbody>
            </table>
            <div>
                <a class="btn btn-danger" href="{{ url('/home') }}">Cancelar</a> </div>
        </div>
            </div>
        </div>
    </div>
@endsection