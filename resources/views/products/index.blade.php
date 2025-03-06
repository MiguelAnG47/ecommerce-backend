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

<body>

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


    <div class="container mt-5">
        <h2 class="text-center mb-4">Nuestros Productos</h2>
        <div class="row">
            <!-- Producto 1 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Producto 1">
                    <div class="card-body">
                        <h5 class="card-title">Producto 1</h5>
                        <p class="card-text">Descripción breve del producto 1. Ideal para uso diario.</p>
                        <p class="card-text"><strong>$19.99</strong></p>
                        <a href="#" class="btn btn-primary">Añadir al carrito</a>
                    </div>
                </div>
            </div>
            <!-- Producto 2 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Producto 2">
                    <div class="card-body">
                        <h5 class="card-title">Producto 2</h5>
                        <p class="card-text">Descripción breve del producto 2. Perfecto para regalos.</p>
                        <p class="card-text"><strong>$29.99</strong></p>
                        <a href="#" class="btn btn-primary">Añadir al carrito</a>
                    </div>
                </div>
            </div>
            <!-- Producto 3 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Producto 3">
                    <div class="card-body">
                        <h5 class="card-title">Producto 3</h5>
                        <p class="card-text">Descripción breve del producto 3. Alta calidad.</p>
                        <p class="card-text"><strong>$39.99</strong></p>
                        <a href="#" class="btn btn-primary">Añadir al carrito</a>
                    </div>
                </div>
            </div>
            <!-- Producto 4 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Producto 4">
                    <div class="card-body">
                        <h5 class="card-title">Producto 4</h5>
                        <p class="card-text">Descripción breve del producto 4. Diseño moderno.</p>
                        <p class="card-text"><strong>$49.99</strong></p>
                        <a href="#" class="btn btn-primary">Añadir al carrito</a>
                    </div>
                </div>
            </div>
            <!-- Producto 5 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Producto 5">
                    <div class="card-body">
                        <h5 class="card-title">Producto 5</h5>
                        <p class="card-text">Descripción breve del producto 5. Duradero y confiable.</p>
                        <p class="card-text"><strong>$59.99</strong></p>
                        <a href="#" class="btn btn-primary">Añadir al carrito</a>
                    </div>
                </div>
            </div>
            <!-- Producto 6 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Producto 6">
                    <div class="card-body">
                        <h5 class="card-title">Producto 6</h5>
                        <p class="card-text">Descripción breve del producto 6. Innovador y eficiente.</p>
                        <p class="card-text"><strong>$69.99</strong></p>
                        <a href="#" class="btn btn-primary">Añadir al carrito</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer class="text-center mt-5">
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
