@extends('layouts.app')
@section('title', 'Gestion de Roles')


@section('content')

<div class="panel">

    <div class="card">
            <div class="panel-heading">
                    <center><h3 class="panel-title">Detalle del cargo : {{ $rol->name }}</h3></center>
                </div>
            <div class="panel-body">
            <table id="demo-dt-basic" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <tbody>
                    <tr>
                        <th>
                            Nro
                        </th>
                        <td>
                            {{ $rol->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Nombre
                        </th>
                        <td>
                            {{ $rol->name }}
                        </td>
                    </tr>

                    <tr>
                        <th>
                            Estado
                        </th>
                        <td>
                            @foreach($rol->permisos as $id => $permissions)
                            <span class="label label-info label-many">{{ $permissions->name }}</span>
                            @endforeach
                        </td>
                    </tr>
                </tbody>
            </table>
            <div>
                <a class="btn btn-danger" href="{{ route("roles.index") }}">Cancelar</a>
            </div>
        </div>
    </div>
</div>
@endsection