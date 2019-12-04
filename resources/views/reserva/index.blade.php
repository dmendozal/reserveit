@extends('layouts.app')
@section('title', 'Gestion de Roles')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Lista de Empresas</h4>
                <a class="btn waves-effect waves-light btn-sm btn-primary" href="{{ route('empresa.create')}}"
                    type="button">Registrar Empresa</a>
                <div class="table-responsive m-t-40">
                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered"
                        cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Nro</th>
                                <th>Razon Social</th>
                                <th>Direccion</th>
                                <th>Email</th>
                                <th>Encargado</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Nro</th>
                                <th>Razon Social</th>
                                <th>Direccion</th>
                                <th>Email</th>
                                <th>Encargado</th>
                                <th>Opciones</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($empresas as $key => $empresa)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $empresa->razon_social }}</td>
                                <td>{{ $empresa->direccion }}</td>
                                <td>{{ $empresa->email }}</td>
                                <td>{{ $empresa->encargadoEmpresa->nombre.' '.$empresa->encargadoEmpresa->apellido }}
                                </td>
                                <td>
                                    <a class="btn waves-effect waves-light btn-sm btn-success"
                                        href="{{ route('empresa.show',$empresa->idempresa)}}" type="button">Detalles</a>
                                    <a class="btn waves-effect waves-light btn-sm btn-success"
                                        href="{{ route('empresa.edit',$empresa->idempresa)}}" type="button">Editar</a>
                                    <form action="{{ route('empresa.destroy', $empresa->idempresa) }}" method="POST"
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