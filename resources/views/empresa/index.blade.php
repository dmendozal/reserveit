@extends('layouts.app')
@section('content')
<div style="margin-bottom: 10px;" class="row">
    <div class="col-lg-12">
        <a class="button button-success button-sm" href="{{route('empresa.create')}}">
            Registrar Empresa
        </a>
    </div>
</div>
<div class="card">
    <div class="card-header">
        Lista de Empresas
    </div>
    <div class="row">
        <!--Export Data Table Start-->
        <div class="col-12 mb-30">
            <div class="box">

                <div class="box-body">
                    <table class="table table-bordered data-table data-table-export">
                        <thead>
                            <tr>
                                <th>Nro</th>
                                <th>Razon Social </th>
                                <th>Email</th>
                                <th>Direccion</th>
                                <th>Telefono</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($empresas as $key => $empresa)
                            <tr data-entry-id="{{ $key }}">
                                <td>{{ $key+1 }}</td>
                                <td>{{ $empresa->razon_social }}</td>
                                <td>{{ $empresa->email }}</td>
                                <td>{{ $empresa->direccion }}</td>
                                <td>{{ $empresa->telefono }}</td>
                                <td>
                                    @can('empresa.detalle')
                                    <a class="button button-primary button-sm"
                                        href="{{ route('empresa.show', $empresa->idempresa) }}">
                                        Mostrar
                                    </a>
                                    @endcan
                                    <a class="button button-info button-sm"
                                        href="{{ route('empresa.edit', $empresa->idempresa) }}">
                                        Editar
                                    </a>
                                    <form action="{{ route('empresa.destroy', $empresa->idempresa) }}" method="POST"
                                        onsubmit="return confirm('¿Está seguro?');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="button button-danger button-sm" value="Eliminar">
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Nro</th>
                                <th>Razon Social </th>
                                <th>Email</th>
                                <th>Direccion</th>
                                <th>Telefono</th>
                                <th>Acciones</th>
                            </tr>
                        </tfoot>
                    </table>

                </div>
            </div>
        </div>
        <!--Export Data Table End-->
    </div>
</div><!-- Content Body End -->
@endsection