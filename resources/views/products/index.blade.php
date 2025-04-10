@extends('layout.app')
@section('content')
    <div class="container mt-5">
        <h2 class="text-center mb-4">Nuestros Productos</h2>
        <div class="row">
            @foreach ($listProducts as $product)
                
            <!-- Producto 1 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://www.shipbob.com/wp-content/uploads/2022/06/PRODUCT-RANGE.jpg" class="card-img-top" alt="{{$product->name}}">
                    <div class="card-body">
                        <h5 class="card-title">{{$product->name}}</h5>
                        <p class="card-text">Categoria: {{$product->category_id}}</p>
                        <p class="card-text"><strong>{{$product->price}}</strong></p>
                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary">Ver producto</a>
    
                        <a href="#" class="btn btn-primary">Añadir al carrito</a>
                    </div>
                </div>
            </div>

            @endforeach

            {{$listProducts->links()}}
        </div>
    </div>
@endsection
