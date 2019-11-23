@extends('layouts.appauth')
@section('content')

<h1 class="text-center m-b-20"> Reserveit</h1>
<h5 class="text-center m-b-20">Restablecer Contraseña</h5>
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif
    <div class="login-register-form col-md-12">
        <form method="POST" action="{{ route('password.email') }}" >
            @csrf
                <div class="form-group">
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
                    <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">
                        Reestablecer
                    </button>
                    <br>
                    <a class="btn-link text-bold text-main" href="{{ route('login') }}">
                    <span class="button button-apple btn-block" style="text-align: center">
                        Atras
                    </span>
                </a>
        </form>
    </div>

@endsection