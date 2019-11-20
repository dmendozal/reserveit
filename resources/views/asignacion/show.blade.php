@extends('layouts.app')
@section('title', 'Activos del Usuario')
@section('content')
<div class="col-lg-12 col-12 mb-20">
    <div class="card">
        <div class="card-header">
            Lista de Activos de : {{$user->name}}
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                    <thead>
                            <tr>
                                <th>Nro</th>
                                <th>Codigo</th>
                                <th>Bien</th>
                            </tr>
                        </thead>
                <tbody>
                        @foreach ($activos as $key => $activo)
                        <tr data-entry-id="{{ $key }}">
                            <td>{{ $key+1 }}</td>
                            <td>{{ $activo->activo->codigo}}</td>
                            <td>
                                {{ $activo->activo->bien->nombre}}
                            </td>
                        </tr>
                        @endforeach
                    
                </tbody>
                <tfoot>
                        <tr>
                            <th>Nro</th>
                            <th>Codigo</th>
                            <th>Bien</th>
                        </tr>
                    </tfoot>
            </table>
            <div>
                <a class="button button-danger button-sm" href="{{ route("asignacion.index") }}">Cancelar</a>            </div>
        </div>
    </div>
</div>
@endsection