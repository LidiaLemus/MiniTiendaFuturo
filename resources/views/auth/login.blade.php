@extends('layouts.app')

@section('content')
<section class="hero  is-fullheight">
    <div class="hero-body">
        <div class="container">
            <div class="columns ">
                <div class="column is-8-tablet is-8-desktop is-6-widescreen">
                    <form id="logout-form" method="POST" action="{{ route('login') }}" class="box">
                        @csrf

                        <div class="field">
                            <label for="email" class="label">Correo Elctronico</label>
                            <div class="control has-icons-left has-icons-right">

                                <input id="email" type="email" class="input is-success" name="email"
                                    value="{{ old('email') }}" required autocomplete="email"
                                    placeholder="e.g. bobsmith@gmail.com"
                                    oninvalid="this.setCustomValidity('Por favor ingresa tu correo electronico')">
                                <span class="icon is-small is-left">
                                    <i class="fas fa-envelope"> </i>
                                </span>
                            </div>
                        </div>

                        <div class="field">
                            <label class="label" for="password">Contraseña</label>
                            <div class="control has-icons-left has-icons-right">
                                <div class="control has-icons-left">
                                    <input id="password" type="password" class="input is-success" name="password"
                                        required autocomplete="current-password" placeholder="*******"
                                        oninvalid="this.setCustomValidity('Por favor ingresa tu contraseña')">
                                    <span class="icon is-small is-left">
                                        <i class="fas fa-lock"> </i>
                                    </span>
                                </div>
                            </div>
                        </div>


                        <div class="field">
                            <div class="control">
                                <input class="checkbox" type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>

                                <label class="checkbox" for="remember">
                                    {{ __('Recordarme') }}
                                </label>
                            </div>
                        </div>


                        <div class="field">
                            <div class="control">
                                <button type="submit" class="button is-success">
                                    {{ __('Iniciar Sesión') }}
                                </button>
                                @if (Route::has('password.request'))
                                <a class="button is-link" href="{{ route('password.request') }}">
                                    {{ __('Olvidaste tu contraseña?') }}
                                </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection