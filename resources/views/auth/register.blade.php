@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="min-height: 75vh;">
    <div class="col-md-6">
        <div class="card p-4">
            <h2 class="text-center mb-4" style="color: #343a40;">Registrarse</h2>
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Nombre</label>
                    <input id="name" type="text"
                        class="form-control @error('name') is-invalid @enderror"
                        name="name" value="{{ old('name') }}" required autofocus>
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Correo Electrónico</label>
                    <input id="email" type="email"
                        class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input id="password" type="password"
                        class="form-control @error('password') is-invalid @enderror"
                        name="password" required>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password-confirm" class="form-label">Confirmar Contraseña</label>
                    <input id="password-confirm" type="password"
                        class="form-control" name="password_confirmation" required>
                </div>

                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary" style="background-color: #800000; border-color: #800000;">
                        Registrarse
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection