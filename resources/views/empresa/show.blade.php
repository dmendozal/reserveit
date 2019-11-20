@extends('layouts.app')
@section('content')
<div class="col-lg-12 col-12 mb-20">
    <div class="card">
        <div class="card-header">
            Detalle de Empresa
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            Razon Social
                        </th>
                        <td>
                            {{ $empresa->razon_social }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Email
                        </th>
                        <td>
                            {{ $empresa->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Direccion
                        </th>
                        <td>
                            {{ $empresa->direccion }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Telefono
                        </th>
                        <td>
                            {{ $empresa->telefono }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Estado
                        </th>
                        <td>
                            {{ $empresa->estado==1?'Activo':'Inactivo' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div>
                <a class="button button-danger button-sm" href="{{ route("empresa.index") }}">Cancelar</a>
            </div>
        </div>
    </div>
</div>
@endsection