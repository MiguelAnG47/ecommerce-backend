@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="min-height: 75vh;">
    <div class="col-md-6">
        <div class="card p-4">
            <h2 class="text-center mb-4" style="color: #343a40;">Verificar Correo Electrónico</h2>
            <div class="card-body">
                @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        {{ __('A fresh verification link has been sent to your email address.') }}
                    </div>
                @endif

                <p class="mb-3">
                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                </p>
                <form method="POST" action="{{ route('verification.resend') }}">
                    @csrf
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Request Another Verification Link') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection