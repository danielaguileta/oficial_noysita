@extends('adminlte::page')

@section('title', 'CAI')

@section('content_header')
    <h1>Gestion de CAI</h1>
@stop

@section('content')
<form action="{{ route('cai.update', $CAIS) }}" method="POST">
   @csrf
   @method('PUT')
   <div class="col-md-12"><br>
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Cai</h3>
        </div>
        <div class="card-body">
            @csrf
            <div class="row">
            <div class="col-6">
        <div class="form-group">
            <label for="">CAI</label>
            <input type="text" class="form-control" id="cai" name="cai" placeholder="" value="{{old('cai',$CAIS['CAI'])}}">
            @error('cai')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
      </div>
      <div class="col-6">
        <div class="form-group">
            <label for="">Tipo Documento</label>
            <input type="text" class="form-control" id="tipo_documento" name="tipo_documento" placeholder=""value="{{old('tipo_documento',$CAIS['TIPO_DOCUMENTO'])}}">
            @error('tipo_documento')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
      </div>
    </div>
    <div class="row">
      <div class="col-6">
        <div class="form-group">
            <label for="">Valor Fiscal</label>
            <input type="text" class="form-control" id="valor_fiscal" name="valor_fiscal" placeholder="" value="{{old('valor_fiscal',$CAIS['VALOR_FISCAL'])}}">
            @error('valor_fiscal')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
      </div>
      <div class="col-6">
        <div class="form-group">
            <label for="">Fecha Vencimiento</label>
            <input type="date" class="form-control" id="fecha_vencimiento" name="fecha_vencimiento" placeholder="" value="{{old('fecha_vencimiento',$CAIS['FECHA_VENCIMIENTO'])}}">
            @error('fecha_vencimiento')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
      </div>
        </div>
        <div class="card-footer">
        <a class="btn btn-danger" href="{{ route('cai.index') }}">Regresar</a>
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