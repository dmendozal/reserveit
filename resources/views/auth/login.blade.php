@extends('layouts.appauth')
@section('content')

<div class="mar-ver pad-btm">
        <h1 class="text-center m-b-20">Bienvenido  ReserveIt</h1>
        <p class="text-center m-b-20">Luchando contra el desperdicio de alimentos</p>
    </div>
<div class="login-register-form">
     
    <form method="POST" action="{{ route('login') }}" class="form-horizontal form-material" id="loginform">
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
                    <br>
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