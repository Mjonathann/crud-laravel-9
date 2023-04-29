@extends('layout.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin tb">
            <div class="pull-left">
                <h2>Producto</h2>
            </div>
            <div class="pull-right">
                <a href="{{route('products.index')}}" class="btn btn-primary">Regresar</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-md-12">
            <div class="form-group">
                <strong>Nombre : </strong>
                {{$product->name}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-lg-12">
            <div class="form-group">
                <strong>Detalle : </strong>
                {{$product->detail}}
            </div>
        </div>
    </div>
@endsection