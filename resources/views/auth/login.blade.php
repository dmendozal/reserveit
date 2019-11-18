@extends('layouts.appauth')
@section('content')

<div class="mar-ver pad-btm">
        <h1 class="h3">Bienvenido a Reserveit</h1>
        <p>Luchando contra el desperdicio de alimentos</p>
        <img class="demo-chg-bg" src="img/bg-img/thumbs/bg-img-1.jpg" height="120px" height="120px" alt="Background Image">
    </div>
<div class="login-register-form">
     
    <form method="POST" action="{{ route('login') }}">
        @csrf
            <div class="form-group"><input class="form-control" type="text" @error('email') is-invalid @enderror"
                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                    placeholder="Correo electronico">
            </div>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <div class="form-group"><input class="form-control" type="password" placeholder="Contraseña"
                    class="form-control @error('password') is-invalid @enderror" name="password" required
                    autocomplete="current-password">
            </div>
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <div class="checkbox pad-btm text-left">
                    <input id="demo-form-checkbox" class="magic-checkbox" name="remember" id="remember" type="checkbox" {{ old('remember') ? 'checked' : '' }}>
                    <label for="demo-form-checkbox">Recuerdame</label>
                </div>

            <div class="col-12 mt-10"><button class="btn btn-info btn-lg btn-block" type="submit">Iniciar
                    sesion</button></div>
                    @if (Route::has('password.request'))
                    <div class="col-12">
                        <div class="row justify-content-between">
                            <div class="col-auto mb-15"><a class="btn-link mar-rgt" href="{{ route('password.request') }}">Se te
                                    olvido tu
                                    contraseña?</a></div>
                        </div>
                    </div>
                    @endif
    </form>
</div>
@endsection