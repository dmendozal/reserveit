@extends('layouts.app')
@section('title', 'Gestion de Permisos')

@section('content')
@include('permisos.modal_update')
@include('permisos.modal_insert')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Lista de Permisos</h4>
                <button class="btn waves-effect waves-light btn-primary" data-toggle="modal" data-target="#exampleModal5" data-whatever="@mdo">Registar Permiso</button>
                <div class="table-responsive m-t-40">
                    <table id="example23"
                        class="display nowrap table table-hover table-striped table-bordered"
                        cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                    <th>Nombre</th>
                                    <th>Fecha de Creacion</th>
                                    <th>Opciones</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Nombre</th>
                                <th>Fecha de Creacion</th>
                                <th>Opciones</th>
                            </tr>
                        </tfoot>
                        <tbody>
                             @foreach ($permisos as $item)
                                    <tr>
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->created_at}}</td>
                                            <td>
                                                <button class="btn waves-effect waves-light btn-success" data-toggle="modal" data-target="#exampleModal3" onclick="Editar('{{$item->id}}','{{$item->name}}')" >Editar</button>
                                                <form action="{{ route('permisos.destroy', $item->id) }}"
                                                        method="POST" onsubmit="return confirm('¿Está seguro?');"
                                                        style="display: inline-block;">
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                        <button class="btn waves-effect waves-light btn-danger" type="submit" >Eliminar</button>
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

<script>
    function Editar(id, nombre) {
        document.getElementById('id1').value=id;
        document.getElementById('nombre1').value=nombre;
    }
</script>
@endsection