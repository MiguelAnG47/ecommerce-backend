@extends('layouts.app')
@section('content')
@if ($product)
<div class="container">
    <div class="row">
        <!-- Imagen del producto -->
        <div class="col-md-6 mb-4">
            <img src="https://www.shipbob.com/wp-content/uploads/2022/06/PRODUCT-RANGE.jpg" class="product-image" alt="{{$product->name}}">
        </div>

        <!-- Detalles del producto -->
        <div class="col-md-6">
            <div class="card p-4">
                <h1 class="mb-3">{{ $product->name }}</h1>
                <p class="product-price">{{ $product->price }}</p>

                <div class="product-info">
                    <h3>Lo que tienes que saber de este producto</h3>
                    <ul>
                        <li><strong>Categoría:</strong> {{ $product->category_id }}</li>
                        <li><strong>Descripción:</strong> {{ $product->description }}</li>
                    </ul>
                </div>

                <div class="d-flex gap-2 mt-4">
                    <button class="btn btn-primary">Comprar ahora</button>
                    <button class="btn btn-secondary">Agregar al carrito</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@endsection
