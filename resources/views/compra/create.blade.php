@extends('adminlte::page')

@section('title', 'Compras')

@section('content_header')
    <h1>Gestion de Compras</h1>
@stop

@section('content')
<form action="{{route('compra.store')}}" method="post">
    @csrf
<div class="col-md-12"><br>
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Compra</h3>
            </div>
            <div class="card-body">
                @csrf
                <div class="row">
                <div class="col-6">
            <div class="form-group">
                <label for="">Nombre Producto</label>
                <input type="text" class="form-control" id="nombre_producto" name="nombre_producto" placeholder="" value="{{old('nombre_producto')}}">
                @error('nombre_producto')
                <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
          </div>
          <div class="col-6">
            <div class="form-group">
                <label for="">Precio Producto</label>
                <input type="number" class="form-control" id="precio_producto" name="precio_producto" placeholder=""value="{{old('precio_producto')}}">
                @error('precio_producto')
                <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            <div class="form-group">
                <label for="">Cantidad Producto</label>
                <input type="number" class="form-control" id="cantidad_producto" name="cantidad_producto" placeholder="" value="{{old('cantidad_producto')}}">
                @error('cantidad_producto')
                <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
          </div>
          <div class="col-6">
            <div class="form-group">
                <label for="">Catalogo Producto</label>
                <input type="text" class="form-control" id="catalogo_producto" name="catalogo_producto" placeholder="" value="{{old('catalogo_producto')}}">
                @error('catalogo_producto')
                <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            <div class="form-group">
                <label for="">Fecha Compra</label>
                <input type="date" class="form-control" id="fecha_compra" name="fecha_compra" placeholder="" value="{{old('fecha_compra')}}">
                @error('fecha_compra')
                <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
          </div>
          
        </div>
            </div>
            <div class="card-footer">
            <a class="btn btn-danger" href="{{ route('compra.index') }}">Regresar</a>
        <button type="submit" class="btn btn-success">Guardar</button>
      </div>
      </form>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
</div>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
   
@stop

@section('js')

@stop