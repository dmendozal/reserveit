@extends('layouts.app')
@section('title', 'Gestion de Roles')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Lista de Entregas</h4>
                <div class="table-responsive m-t-40">
                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered"
                        cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Nro</th>
                                <th>Comentario</th>
                                <th>Valoracion</th>
                                <th>Fecha</th>
                                <th>Reserva - Cliente</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Nro</th>
                                <th>Comentario</th>
                                <th>Valoracion</th>
                                <th>Fecha</th>
                                <th>Reserva - Cliente</th>
                                <th>Opciones</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($entregas as $key => $entrega)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $entrega->comentario ?? 'Sin comentarios'}}</td>
                                <td>{{ $entrega->valoracion ?? 'Sin valoracion' }}</td>
                                <td>{{ $entrega->fecha }}</td>
                                <td>{{ $entrega->reserva->cliente->nombre.' '.$entrega->reserva->cliente->apellido }}
                                </td>
                                <td>
                                    <a class="btn waves-effect waves-light btn-sm btn-success"
                                        href="{{ route('entrega.show',$entrega->identrega_producto)}}"
                                        type="button">Detalles</a>
                                    <a class="btn waves-effect waves-light btn-sm btn-success"
                                        href="{{ route('entrega.edit',$entrega->identrega_producto)}}"
                                        type="button">Editar</a>
                                    <form action="{{ route('entrega.destroy', $entrega->identrega_producto) }}"
                                        method="POST" onsubmit="return confirm('¿Está seguro?');"
                                        style="display: inline-block;">
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
