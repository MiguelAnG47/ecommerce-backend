@extends('layout.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="https://via.placeholder.com/500x300" class="product-image" alt="Imagen del Producto">
            </div>
            <div class="col-md-6 product-detail">
                <h1>Notebook Gamer Victus 16-r1016la</h1>
                <p class="product-price">$8.199.900</p>
                <p class="product-old-price">$10.269.900</p>
                <p class="product-discount">20% OFF</p>

                <div class="product-info">
                    <h3>Lo que tienes que saber de este producto</h3>
                    <ul>
                        <li><strong>Categoría:</strong> Portátiles</li>
                        <li><strong>Descripción:</strong> Notebook gamer con pantalla de 16.1", 32GB de RAM, 1TB SSD, Intel
                            Core i7 y tarjeta gráfica NVIDIA GeForce RTX 4070.</li>
                        <li><strong>Disponibilidad:</strong> Última disponible</li>
                    </ul>
                </div>

                <button class="btn btn-primary">Comprar ahora</button>
                <button class="btn btn-secondary">Agregar al carrito</button>
            </div>
        </div>
    </div>
@endsection
