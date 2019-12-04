@extends('layouts.app')
@section('title', 'Gestion de Roles')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Lista de Categorias</h4>
                <a class="btn waves-effect waves-light btn-sm btn-primary" href="{{ route('categoria.create')}}"
                    type="button">Registrar Categoria</a>
                <div class="table-responsive m-t-40">
                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered"
                        cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Nro</th>
                                <th>Nombre</th>
                                <th>Descripcion</th>
                                <th>Imagen</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Nro</th>
                                <th>Nombre</th>
                                <th>Descripcion</th>
                                <th>Imagen</th>
                                <th>Opciones</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($categorias as $key => $categoria)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $categoria->nombre }}</td>
                                <td>{{ $categoria->descripcion }}</td>
                                <td><img src="{{ $categoria->imagen }}" style="width: 30%; height: 10%" alt=""></td>
                                <td>
                                    <a class="btn waves-effect waves-light btn-sm btn-success"
                                        href="{{ route('categoria.show',$categoria->idcategoria)}}"
                                        type="button">Detalles</a>
                                    <a class="btn waves-effect waves-light btn-sm btn-success"
                                        href="{{ route('categoria.edit',$categoria->idcategoria)}}"
                                        type="button">Editar</a>
                                    <form action="{{ route('categoria.destroy', $categoria->idcategoria) }}"
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