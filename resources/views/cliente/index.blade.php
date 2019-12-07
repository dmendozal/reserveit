@extends('layouts.app')
@section('title', 'Gestion de Roles')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Lista de Clientes</h4>
                <div class="table-responsive m-t-40">
                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered"
                        cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Nro</th>
                                <th>Fecha</th>
                                <th>Cliente</th>
                                <th> Categoria</th>
                                <th> Producto</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Nro</th>
                                <th>Fecha</th>
                                <th>Cliente</th>
                                <th> Categoria</th>
                                <th> Producto</th>
                                <th>Opciones</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($clientes as $key => $cliente)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $cliente->nombre }}</td>
                                <td>{{ $cliente->apellido }}</td>
                                <td>{{ ($cliente->sexo == 1)?'Masculino':'Femenino' }}</td>
                                <td>{{ $cliente->direccion }}
                                </td>
                                <td>
                                    <a class="btn waves-effect waves-light btn-sm btn-success"
                                        href="{{ route('cliente.show',$cliente->idcliente)}}" type="button">Detalles</a>
                                    <a class="btn waves-effect waves-light btn-sm btn-success"
                                        href="{{ route('cliente.edit',$cliente->idcliente)}}" type="button">Editar</a>
                                    <form action="{{ route('cliente.destroy', $cliente->idcliente) }}" method="POST"
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

