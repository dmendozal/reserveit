@extends('layouts.app')
@section('title', 'Gestion de Roles')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Lista de Encargado de Empresas</h4>
                <div class="table-responsive m-t-40">
                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered"
                        cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Nro</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Email</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Nro</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Email</th>
                                <th>Opciones</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($encargadoEmpresa as $key => $encargado)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $encargado->nombre }}</td>
                                <td>{{ $encargado->apellido }}</td>
                                <td>{{ $encargado->email }}</td>
                                </td>
                                <td>
                                    <a class="btn waves-effect waves-light btn-sm btn-success"
                                        href="{{ route('encargadoempresa.show',$encargado->idencargado_empresa)}}"
                                        type="button">Detalles</a>
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