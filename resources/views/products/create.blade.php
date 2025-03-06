@extends('layout.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 form-container">
                <h2 class="text-center mb-4">Crear Nuevo Producto</h2>
                <form>
                    <!-- Campo para el nombre del producto -->
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre del Producto</label>
                        <input type="text" class="form-control" id="nombre" placeholder="Ingrese el nombre del producto"
                            required>
                    </div>

                    <!-- Campo para la descripción del producto -->
                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripción</label>
                        <textarea class="form-control" id="descripcion" rows="3" placeholder="Ingrese una descripción del producto"
                            required></textarea>
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
                        <input type="number" class="form-control" id="precio" step="0.01"
                            placeholder="Ingrese el precio del producto" required>
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
@endsection
