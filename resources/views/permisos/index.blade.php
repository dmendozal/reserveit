@extends('layouts.app')
@section('title', 'Gestion de Permisos')

@section('content')
@include('permisos.modal_update')
@include('permisos.modal_insert')

                            <div class="panel">
                                <br>
                                 <button class="btn btn-mint btn-icon btn-lg float-right" data-toggle="modal" data-target="#exampleModal5" data-whatever="@mdo"><i class="demo-pli-add icon-lg"></i></button>
                                    <div class="panel-heading">
                                       <center> <h3 class="panel-title">Lista de Permisos</h3></center>
                                    </div>
                                    <div class="panel-body">
                                        <table id="demo-dt-basic" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                        <th>Nombre</th>
                                                        <th>Fecha de Creacion</th>
                                                        <th>Opciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                    @foreach ($permisos as $item)
                                                    <tr>
                                                            <td>{{$item->name}}</td>
                                                            <td>{{$item->created_at}}</td>
                                                            <td>
                                                                <button class="btn btn-success btn-icon" data-toggle="modal" data-target="#exampleModal3" onclick="Editar('{{$item->id}}','{{$item->name}}')" ><i class="demo-psi-pen-5 icon-lg"></i></button>
                                                                <form action="{{ route('permisos.destroy', $item->id) }}"
                                                                        method="POST" onsubmit="return confirm('¿Está seguro?');"
                                                                        style="display: inline-block;">
                                                                        <input type="hidden" name="_method" value="DELETE">
                                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                                        <button class="btn btn-danger btn-icon" type="submit" ><i class="demo-psi-recycling icon-lg"></i></button>
                                                                </form>
                                                                <a class="btn btn-info btn-icon" type="button" ><i class="demo-pli-information icon-lg"></i></a>
                                                            </td>
                                                    </tr>
                                                    @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                

<script>
    function Editar(id, nombre) {
        document.getElementById('id1').value=id;
        document.getElementById('nombre1').value=nombre;
    }
</script>
@endsection