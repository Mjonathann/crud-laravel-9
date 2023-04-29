@extends('layout.layout')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editar Producto</h2>
            </div>
            <div class="pull-right">
                <a href="{{route('products.index')}}" class="btn btn-primary">Regresar</a>
            </div>
        </div>
    </div>
    <hr>
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Hay algunos errores</strong>
            <ul>
                @foreach ($errors->all() as $error))
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br>
    @endif

    <form action="{{route('products.update', $product->id)}}" method="post">
        @method('PUT')
        @csrf

        <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-12">
                <div class="form-group">
                    <strong>Nombre : </strong>
                    <input type="text" name="name" id="name" value="{{$product->name}}" class="form-control" placeholder="Nombre">
                </div>
            </div>
            <div class="col-xs-12 col-md-12 col-lg 12">
                <div class="form-group">
                    <strong>Detalle : </strong>
                    <br>
                    <textarea name="detail" id="detail" cols="30" rows="10">{{$product->detail}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-md-12 col-lg-12">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </form>
@endsection