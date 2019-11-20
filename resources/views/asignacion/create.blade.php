@extends('layouts.app')
@section('title', 'Formulario de Asignacion')

@section('content')
<div class="col-lg-12 col-12 mb-20">

    <h6 class="mb-15">Formulario de Asignacion</h6>
    <form action="{{route('asignacion.store')}}" method="POST" enctype="multipart/from-data" class="smart-form" role="form">
         @csrf            

            <div class="box-body">
                    <table class="table table-bordered data-table data-table-default">
                        <thead>
                            <tr>
                                <th>Codigo</th>
                                <th>Bien</th>
                                <th>Marcar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($activos as $item)
                            <tr>
                                    <td>{{$item->codigo}}</td>
                                    <td>{{$item->bien->nombre}}</td>
                                    <td>
                                   <center> <label class="adomx-checkbox-2 success"><input type="checkbox" name="activos[]" value="{{$item->idactivo}}"> <i class="icon"></i></label></center>
                                    </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Codigo</th>
                                <th>Bien</th>
                                <th>Marcar</th>
                            </tr>
                        </tfoot>
                    </table>
                    <div class="col-lg-12 col-12 mb-30">
                            <h5 class="sub-title">Usuario </h5>
                            <select class="form-control select2" name="iduser">
                                <optgroup label="Options One">
                                    @foreach ($usuarios as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </optgroup>
                            </select>
                        </div>
                <center><button type="submit" class="button button-primary button-sm">Realizar Asignacion</button>
                <a class="button button-danger button-sm" href="{{ route("asignacion.index") }}">Cancelar</a></center>

    </form>

</div>



@endsection