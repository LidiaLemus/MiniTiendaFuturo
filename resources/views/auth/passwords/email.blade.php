@extends('layouts.app')

@section('content')
<br>
<br>
<div class="container">
    <div class="card-content">

        <div class="columns">
            <div class="column">
                
                <div class="title is-3">{{ __('Restablecer la contraseña') }}</div>
                
                <div>
                    @if (session('status'))
                    <div class="notification" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="column">

                            
                            <label for="email" class="label">{{ __('Dirección de correo electrónico') }}</label>
                            
                            
                            <input id="email" type="email" class="input is-info @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        
                        
                        <div class="column">
                            <button type="submit" class="button is-link">
                                {{ __('Restablacer Contraseña') }}
                            </button>
                        </div>
                        
                        
                        
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
