<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenido a Nuestro Ecommerce</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <style>
            body {
                background-color: #f8f9fa;
            }
    
            .jumbotron {
                background-image: url('https://via.placeholder.com/1500x500');
                background-size: cover;
                color: white;
                text-shadow: 2px 2px 4px #000000;
            }
    
            .card {
                transition: transform .2s;
            }
    
            .card:hover {
                transform: scale(1.05);
            }
    
            footer {
                background-color: #343a40;
                color: white;
                padding: 20px 0;
            }
        </style>
</head>

<body class="d-flex flex-column min-vh-100">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Ecommerce</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Inicio <span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contacto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Iniciar Sesión</a>
                </li>
            </ul>
        </div>
    </nav>


    
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
                        <li><strong>Descripción:</strong> Notebook gamer con pantalla de 16.1", 32GB de RAM, 1TB SSD, Intel Core i7 y tarjeta gráfica NVIDIA GeForce RTX 4070.</li>
                        <li><strong>Disponibilidad:</strong> Última disponible</li>
                    </ul>
                </div>
    
                <button class="btn btn-primary">Comprar ahora</button>
                <button class="btn btn-secondary">Agregar al carrito</button>
            </div>
        </div>
    </div>

    <footer class="bg-dark text-white text-center py-3 mt-auto">
        <div class="container">
            <p>&copy; 2023 Ecommerce. Todos los derechos reservados.</p>
        </div>
    </footer>

    <!-- Bootstrap JS y dependencias -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
