@extends('layouts.appauth')
@section('content')

<h1 class="h1"> Reserveit</h1>
<h1 class="h3">Restablecer Contraseña</h1>
<p class="pad-btm">Le llegara un correo electronico a su Email </p>

<div class="card-body card-deck">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif
    <div class="login-register-form col-md-12">
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="row">
                <div class="form-group row">
                    <div class="form-group">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email" autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6 mt-10">
                    <button class="btn btn-danger btn-lg btn-block" type="submit">
                        Reestablecer
                    </button>
                </div>
                <a class="btn-link text-bold text-main" href="{{ route('login') }}">
                    <span class="button button-apple btn-block" style="text-align: center">
                        Atras
                    </span>
                </a>
            </div>
        </form>
    </div>
</div>

@endsection