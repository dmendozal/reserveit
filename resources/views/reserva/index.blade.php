@extends('layouts.app')
@section('title', 'Gestion de Roles')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Lista de Reservas</h4>
                <div class="table-responsive m-t-40">
                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered"
                        cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Nro</th>
                                <th>Producto</th>
                                <th>Cantidad</th>
                                <th>Monto Total</th>
                                <th>Fecha</th>
                                <th>Estado de la Reserva</th>
                                <th>Codigo de Verificacion</th>
                                <th>Cliente</th>
                                <th>Sucursal</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Nro</th>
                                <th>Producto</th>
                                <th>Cantidad</th>
                                <th>Monto Total</th>
                                <th>Fecha</th>
                                <th>Estado de la Reserva</th>
                                <th>Codigo de Verificacion</th>
                                <th>Cliente</th>
                                <th>Sucursal</th>
                                <th>Opciones</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($reservas as $key => $reserva)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{$reserva->ofertaProducto->producto->nombre}}</td>
                                <td>{{ $reserva->cantidad }}</td>
                                <td>{{ $reserva->mont_tot }}</td>
                                <td>{{ $reserva->fecha }}</td>
                                <td>{{ $reserva->est_reser }}</td>
                                <td>{{ $reserva->cod_seg }}</td>
                                <td>{{ $reserva->cliente->nombre.' '.$reserva->cliente->apellido }}</td>
                                <td>{{ $reserva->ofertaProducto->sucursal->nombre }}</td>
                                <td>
                                    @if($reserva->est_reser != 'Terminado')
                                    <a class="btn waves-effect waves-light btn-sm btn-success"
                                        href="{{ route('reserva.show',$reserva->idreserva)}}" type="button">Ver
                                        Ubicacion
                                    </a>
                                    @endif
                                    <a class="btn waves-effect waves-light btn-sm btn-primary"
                                        href="{{ route('reserva.edit',$reserva->idreserva)}}" type="button">Entregar producto</a>
                                    <form action="{{ route('reserva.destroy', $reserva->idreserva) }}" method="POST"
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
