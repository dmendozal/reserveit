@extends('layouts.app')
@section('title', 'Detalle de Bien')
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
                            {{ $bien->idbien }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Nombre
                        </th>
                        <td>
                            {{ $bien->nombre }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Descripcion
                        </th>
                        <td>
                            {{ $bien->descripcion }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Estado
                        </th>
                        <td>
                            {{ $bien->estado==1?'Activo':'Inactivo' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div>
                    <a class="button button-danger button-sm" href="{{ route("bien.index") }}">Cancelar</a>
                </div>
        </div>
    </div>
</div>
@endsection