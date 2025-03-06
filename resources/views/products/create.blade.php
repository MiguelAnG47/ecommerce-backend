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


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 form-container">
                <h2 class="text-center mb-4">Crear Nuevo Producto</h2>
                <form>
                    <!-- Campo para el nombre del producto -->
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre del Producto</label>
                        <input type="text" class="form-control" id="nombre" placeholder="Ingrese el nombre del producto" required>
                    </div>

                    <!-- Campo para la descripción del producto -->
                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripción</label>
                        <textarea class="form-control" id="descripcion" rows="3" placeholder="Ingrese una descripción del producto" required></textarea>
                    </div>

                    <!-- Campo para la categoría del producto -->
                    <div class="mb-3">
                        <label for="categoria" class="form-label">Categoría</label>
                        <select class="form-control" id="categoria" required>
                            <option value="">Seleccione una categoría</option>
                            <option value="electronica">Electrónica</option>
                            <option value="ropa">Ropa</option>
                            <option value="hogar">Hogar</option>
                            <option value="deportes">Deportes</option>
                            <option value="otros">Otros</option>
                        </select>
                    </div>

                    <!-- Campo para el precio del producto -->
                    <div class="mb-3">
                        <label for="precio" class="form-label">Precio</label>
                        <input type="number" class="form-control" id="precio" step="0.01" placeholder="Ingrese el precio del producto" required>
                    </div>

                    <!-- Campo para la imagen del producto -->
                    <div class="mb-3">
                        <label for="imagen" class="form-label">Imagen del Producto</label>
                        <input type="file" class="form-control" id="imagen" accept="image/*" required>
                    </div>

                    <!-- Botón para crear el producto -->
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Crear Producto</button>
                    </div>
                </form>
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
