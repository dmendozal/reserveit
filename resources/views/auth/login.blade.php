@extends('layouts.appauth')
@section('content')

<div class="login-register-form">
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="row">
            <div class="col-12 mb-20"><input class="form-control" type="text" @error('email') is-invalid @enderror"
                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                    placeholder="Correo electronico">
            </div>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <div class="col-12 mb-20"><input class="form-control" type="password" placeholder="Contraseña"
                    class="form-control @error('password') is-invalid @enderror" name="password" required
                    autocomplete="current-password">
            </div>
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <div class="form-check">

                <div class="col-12 mb-20"><label for="remember" class="adomx-checkbox-2"><input class="form-check-input"
                            type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}><i
                            class="icon"></i>Recuerdame.</label>
                </div>
            </div>

            @if (Route::has('password.request'))
            <div class="col-12">
                <div class="row justify-content-between">
                    <div class="col-auto mb-15"><a class="btn btn-link" href="{{ route('password.request') }}">Se te
                            olvido tu
                            contraseña?</a></div>
                </div>
            </div>
            @endif

            <div class="col-12 mt-10"><button class="button button-primary btn-block" type="submit">Iniciar
                    sesion</button></div>
        </div>
    </form>
</div>
@endsection