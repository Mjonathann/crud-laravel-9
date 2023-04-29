@extends('layout.layout')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>CRUD con Laravel 9</h2>
            </div>
            <div class="pull-right">
                <a href="{{route('products.create')}}" class="btn btn-success">Crear Producto</a>
            </div>
        </div>
    </div>
    <hr>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        <br>
    @endif

    <table class="table table-bordered">
        <thead>
            <th>No</th>
            <th>Nombre</th>
            <th>Detalle</th>
            <th width="280px">Acciones</th>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->detail }}</td>
                    <td>
                        <form action="{{route('products.destroy', $product->id)}}" method="post">
                            @method('DELETE')
                            @csrf
                            
                            <a href="{{route('products.show', $product->id)}}" class="btn btn-info">Ver</a>
                            <a href="{{route('products.edit', $product->id)}}" class="btn btn-primary">Editar</a>

                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {!! $products->links() !!}
@endsection

