<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenido a Nuestro Ecommerce</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
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

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Ecommerce</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
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

    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid text-center">
        <div class="container">
            <h1 class="display-4">Bienvenido a Nuestro Ecommerce</h1>
            <p class="lead">Descubre los mejores productos al mejor precio.</p>
            <a class="btn btn-primary btn-lg" href="#" role="button">Explorar Productos</a>
        </div>
    </div>

    <!-- Productos Destacados -->
    <div class="container mt-5">
        <h2 class="text-center mb-4">Productos Destacados</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Producto 1">
                    <div class="card-body">
                        <h5 class="card-title">Producto 1</h5>
                        <p class="card-text">Descripción breve del producto 1.</p>
                        <a href="#" class="btn btn-primary">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Producto 2">
                    <div class="card-body">
                        <h5 class="card-title">Producto 2</h5>
                        <p class="card-text">Descripción breve del producto 2.</p>
                        <a href="#" class="btn btn-primary">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Producto 3">
                    <div class="card-body">
                        <h5 class="card-title">Producto 3</h5>
                        <p class="card-text">Descripción breve del producto 3.</p>
                        <a href="#" class="btn btn-primary">Ver más</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-center mt-5">
        <div class="container">
            <p>&copy; 2023 Ecommerce. Todos los derechos reservados.</p>
        </div>
    </footer>

    <!-- Bootstrap JS y dependencias -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>