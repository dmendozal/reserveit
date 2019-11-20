@extends('layouts.app')
@section('title', 'Detalle del activo')
@section('content')
<div class="col-lg-12 col-12 mb-20">
    <div class="card">
        <div class="card-header">
            Detalle de Activo
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            Nro
                        </th>
                        <td>
                            {{ $activo->idactivo }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Codigo
                        </th>
                        <td>
                            {{ $activo->codigo }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Bien
                        </th>
                        <td>
                            {{ $activo->bien->nombre }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Estado
                        </th>
                        <td>
                            {{ $activo->state->nombre }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Ubicacion
                        </th>
                        <td>
                            {{ "Piso: ".$activo->ubicacion->piso." - Aula: ".$activo->ubicacion->aula }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Estado
                        </th>
                        <td>
                            {{ $activo->estado==1?'Activo':'Inactivo' }}
                        </td>
                    </tr>

                    <tr>
                            <th>
                                Codigo Qr
                            </th>
                            <td>
                            <img src="{{asset($activo->qr)}}" style="height: 100px;width: auto;" />
                            </td>
                        </tr>
                </tbody>
            </table>
            <div>
                    <a class="button button-danger button-sm" href="{{ route('activo.index') }}">Cancelar</a>            </div>
        </div>
    </div>
</div>
@endsection