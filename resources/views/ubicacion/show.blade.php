@extends('layouts.app')
@section('title', 'Detalle de Ubicacion')
@section('content')
<div class="col-lg-12 col-12 mb-20">
    <div class="card">
        <div class="card-header">
            Detalle del Estado
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            Nro
                        </th>
                        <td>
                            {{ $ubicacion->idubicacion }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Aula
                        </th>
                        <td>
                            {{ $ubicacion->aula }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Piso
                        </th>
                        <td>
                            {{ $ubicacion->piso }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Estado
                        </th>
                        <td>
                            {{ $ubicacion->estado==1?'Activo':'Inactivo' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div>
                    <a class="button button-danger button-sm" href="{{ route('ubicacion.index') }}">Cancelar</a>            </div>
            </div>
        </div>
    </div>
</div>
@endsection