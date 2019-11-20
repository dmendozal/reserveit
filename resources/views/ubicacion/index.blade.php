@extends('layouts.app')
@section('title', 'Gestion de Ubicacion')
@section('content')
<div style="margin-bottom: 10px;" class="row">
    <div class="col-lg-12">
        <a class="button button-success button-sm" href="{{route('ubicacion.create')}}">
            Registrar Ubicacion
        </a>
    </div>
</div>
<div class="card">
    <div class="card-header">
        Lista de Ubicacion
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
                                <th>Aula </th>
                                <th>Piso</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ubicaciones as $key => $ubicacion)
                            <tr data-entry-id="{{ $key }}">
                                <td>{{ $key+1 }}</td>
                                <td>{{ $ubicacion->aula }}</td>
                                <td>{{ $ubicacion->piso }}</td>
                                <td>
                                    <a class="button button-primary button-sm"
                                        href="{{ route('ubicacion.show', $ubicacion->idubicacion) }}">
                                        Mostrar
                                    </a>
                                    <a class="button button-info button-sm"
                                        href="{{ route('ubicacion.edit', $ubicacion->idubicacion) }}">
                                        Editar
                                    </a>
                                    <form action="{{ route('ubicacion.destroy', $ubicacion->idubicacion) }}"
                                        method="POST" onsubmit="return confirm('¿Está seguro?');"
                                        style="display: inline-block;">
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
                                <th>Aula </th>
                                <th>Piso</th>
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