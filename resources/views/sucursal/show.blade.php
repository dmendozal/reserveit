@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Registrar productos en la sucursal</h4>
                <form action="{{route('sucursalproducto.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="fkidsucursal" value="{{ $sucursal->idsucursal }}" hidden>
                    <div class="form-group {{ $errors->has('productos') ? 'has-error' : '' }}">
                        <label for="productos">productos</label>
                        <span class="btn btn-info btn-sm select-all" style="padding-top: 0%">Select all</span>
                        <span class="btn btn-info btn-sm deselect-all" style="padding-top: 0%">Deselect
                            all</span></label>
                        <select name="productos[]" id="productos" class="form-control select2" multiple="multiple">
                            @foreach($productos as $id => $producto)
                            <option value="{{ $id }}"
                                {{ (in_array($id, old('productos', [])) || isset($sucursal) && $sucursal->sucursalProducto->contains($id)) ? 'selected' : '' }}>
                                {{ $producto }}
                            </option>
                            @endforeach
                        </select>
                        @if($errors->has('permissions'))
                        <em class="invalid-feedback">
                            {{ $errors->first('permissions') }}
                        </em>
                        @endif
                    </div>
                    <div class="pull-right">
                        <button type="submit" class="btn btn-primary">Registrar Productos</button>
                        <a class="btn btn-danger" href="{{ route('sucursal.index') }}">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection