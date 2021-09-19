@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <a href="{{ route('products.create') }}" class="btn btn-primary btn-sm mb-4"> Crear producto</a>
                <table class="table table-sm">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>NOMBRE</th>
                        <th>DESCRIPCION</th>
                        <th>PRECIO</th>
                        <th>ACCIONES</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->price }}</td>
                            <td>
                                <form action="{{ route('products.destroy',$product->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a href="">Detalles</a>
                                    <a href="{{ route('products.edit',$product->id) }}">Editar</a>
                                    <button type="submit" class="btn btn-link">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
