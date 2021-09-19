@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <a href="{{ route('products.index') }}" class="btn btn-primary btn-sm mb-4"> Cancelar :(</a>
                <form action="{{ route('products.update',$product->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="">Nombre</label>
                        <input type="text" name="name" class="form-control" value="{{ $product->name }}" required>
                    </div>
                    <div class="form-group">
                        <label for="">Descripcion</label>
                        <input type="text" name="description" value="{{ $product->description }}" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Precio</label>
                        <input type="number" name="price" class="form-control" value="{{ $product->price }}" required>
                    </div>
                    <hr>
                    <button class="btn btn-primary" type="submit">Actualizar</button>
                </form>
            </div>
        </div>
    </div>

@endsection
