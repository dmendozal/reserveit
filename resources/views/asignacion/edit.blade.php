@extends('layouts.app')
@section('title', 'Formulario de ReAsignacion')

@section('content')
<div class="col-lg-12 col-12 mb-20">

    <h6 class="mb-15">Formulario de ReAsignacion</h6>
    <form action="{{route('asignacion.update',$user->id)}}" method="POST" enctype="multipart/from-data" class="smart-form" role="form">
         @csrf            
         @method('PUT')

         <div class="col-lg-12 col-12 mb-30">
                <h5 class="sub-title">Usuario </h5>
                 <h4>Nombre : {{$user->name}}  Email: {{$user->email}} </h4>
            </div>

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
                                        @if ($item->asignado==1)
                                        <center> <label class="adomx-checkbox-2 success"><input type="checkbox" name="activos[]" value="{{$item->idactivo}}" checked> <i class="icon"></i></label></center>
                                        @else
                                        <center> <label class="adomx-checkbox-2 success"><input type="checkbox" name="activos[]" value="{{$item->idactivo}}"> <i class="icon"></i></label></center>
                                        @endif
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
                    <center><button type="submit" class="button button-primary button-sm">Guardar Cambios</button>
                    <a class="button button-danger button-sm" href="{{ route("asignacion.index") }}">Cancelar</a></center>


    </form>

</div>



@endsection