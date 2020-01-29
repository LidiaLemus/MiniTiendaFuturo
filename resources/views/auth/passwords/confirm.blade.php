@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card-content">

        <div class="column">
            
            <div>Confirme su Contraseña</div>
            
            <div class="card-body">
                Por favor confirme su contraseña antes de continuar
                
                <form method="POST" action="{{ route('password.confirm') }}">
                    @csrf
                    
                    <div class="field">
                        <label for="password" class="label">{{ __('Password') }}</label>

                        <div class="control">
                            <input id="password" type="password" class="input" name="password" required autocomplete="current-password">
                        </div>
                    </div>
                    
                    
                    <div class="buttons has-addons">
                        <button type="submit" class="button is-primary">
                            Confirmar contraseña
                        </button>
                        
                        @if (Route::has('password.request'))
                        <a class="button is-link" href="{{ route('password.request') }}">
                            ¿Olvidaste tu contraseña?
                        </a>
                        @endif
                    </div>
                    
                </form>
            </div>
        </div>
        
    </div>
</div>
@endsection
