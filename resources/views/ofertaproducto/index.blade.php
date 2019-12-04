@extends('layouts.app')
@section('title', 'Gestion de Roles')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Lista de Ofertas de Productos</h4>
                <a class="btn waves-effect waves-light btn-sm btn-primary" href="{{ route('ofertaproducto.create')}}"
                    type="button">Registrar Ofertas</a>
                <div class="table-responsive m-t-40">
                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered"
                        cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Nro</th>
                                <th>Cantidad Disponible</th>
                                <th>Precio</th>
                                <th>Fecha</th>
                                <th>Hora de Inicio</th>
                                <th>Hora de Fin</th>
                                <th>Sucursal</th>
                                <th>Producto</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Nro</th>
                                <th>Cantidad Disponible</th>
                                <th>Precio</th>
                                <th>Fecha</th>
                                <th>Hora de Inicio</th>
                                <th>Hora de Fin</th>
                                <th>Sucursal</th>
                                <th>Producto</th>
                                <th>Opciones</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($ofertaProducto as $key => $oferta)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $oferta->cant_disp }}</td>
                                <td>{{ $oferta->precio }}</td>
                                <td>{{ $oferta->fecha }}</td>
                                <td>{{ $oferta->hora_inicio }}</td>
                                <td>{{ $oferta->hora_fin }}</td>
                                <td>{{ $oferta->sucursal->nombre }}</td>
                                <td>{{ $oferta->producto->nombre }}</td>
                                <td>
                                    <a class="btn waves-effect waves-light btn-sm btn-success"
                                        href="{{ route('ofertaproducto.show',$oferta->idoferta_producto)}}"
                                        type="button">Detalles</a>
                                    <a class="btn waves-effect waves-light btn-sm btn-success"
                                        href="{{ route('ofertaproducto.edit',$oferta->idoferta_producto)}}"
                                        type="button">Editar</a>
                                    <form action="{{ route('ofertaproducto.destroy', $oferta->idoferta_producto) }}"
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