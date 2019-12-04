@extends('layouts.app')
@section('title', 'Gestion de Roles')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Lista de Sucursales</h4>
                <a class="btn waves-effect waves-light btn-sm btn-primary" href="{{ route('sucursal.create')}}"
                    type="button">Registrar Sucursal</a>
                <div class="table-responsive m-t-40">
                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered"
                        cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Nro</th>
                                <th>Nombre</th>
                                <th>Direccion</th>
                                <th>Telefono</th>
                                <th>Encargado de Empresa</th>
                                <th>Encargado de Sucursal</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Nro</th>
                                <th>Nombre</th>
                                <th>Direccion</th>
                                <th>Telefono</th>
                                <th>Encargado de Empresa</th>
                                <th>Encargado de Sucursal</th>
                                <th>Opciones</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($sucursales as $key => $sucursal)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $sucursal->nombre }}</td>
                                <td>{{ $sucursal->direccion }}</td>
                                <td>{{ $sucursal->telefono }}</td>
                                <td>{{ $sucursal->encargadoEmpresa->nombre.' '.$sucursal->encargadoEmpresa->apellido }}
                                </td>
                                <td>{{ $sucursal->encargadoSucursal->nombre.' '.$sucursal->encargadoSucursal->apellido }}
                                </td>
                                <td>
                                    <a class="btn waves-effect waves-light btn-sm btn-success"
                                        href="{{ route('sucursal.show',$sucursal->idsucursal)}}"
                                        type="button">Agregar Productos</a>
                                    <a class="btn waves-effect waves-light btn-sm btn-success"
                                        href="{{ route('sucursal.edit',$sucursal->idsucursal)}}"
                                        type="button">Editar</a>
                                    <form action="{{ route('sucursal.destroy', $sucursal->idsucursal) }}" method="POST"
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