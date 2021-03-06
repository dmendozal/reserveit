@extends('layouts.app')
@section('title', 'Gestion de Roles')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Lista de Productos</h4>
                <a class="btn waves-effect waves-light btn-sm btn-primary" href="{{ route('producto.create')}}"
                    type="button">Registrar Producto</a>
                <div class="table-responsive m-t-40">
                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered"
                        cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Nro</th>
                                <th>Nombre</th>
                                <th style="width: 100px">Descripcion</th>
                                <th>Imagen</th>
                                <th>Categoria</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Nro</th>
                                <th>Nombre</th>
                                <th style="width: 100px">Descripcion</th>
                                <th>Imagen</th>
                                <th>Categoria</th>
                                <th>Opciones</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($productos as $key => $producto)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $producto->nombre }}</td>
                                <td>{{ $producto->descripcion }}</td>
                                <td><img src="{{ $producto->imagen }}" style="height:100px;width: 100px;" alt=""></td>
                                <td>{{ $producto->categoria->nombre }}</td>
                                <td>
                                    <a class="btn waves-effect waves-light btn-sm btn-success"
                                        href="{{ route('empresa.show',$producto->idproducto)}}"
                                        type="button">Detalles</a>
                                    <a class="btn waves-effect waves-light btn-sm btn-success"
                                        href="{{ route('empresa.edit',$producto->idproducto)}}" type="button">Editar</a>
                                    <form action="{{ route('empresa.destroy', $producto->idproducto) }}" method="POST"
                                        onsubmit="return confirm('??Est?? seguro?');" style="display: inline-block;">
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