@extends('layouts.app')

@section('content')
<br>
<br>
<div class="container">
   <div class="columns">
    <div class="card-content">

        <div class="title">{{ __('Restablecer la contraseña') }}</div>
        
        <div class="card-content">
            <form method="POST" action="{{ route('password.update') }}">
                @csrf
            
                <input type="hidden" name="token" value="{{ $token }}">
                
                <div class="field">
                    <label for="email" class="label">{{ __('Dirección de correo electrónico') }}</label>
                    
                    <input id="email" type="email" class="input @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                    
                    <div class="column">
                        @error('email')
                    <span class="notification">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                        </div>
                        
                        <div class="field">
                            <label for="password" class="label">{{ __('contraseña') }}</label>
                            
                            <div class="column">
                                <div class="field">
                                    <div class="control">
                                        <input id="password" type="password" class="input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                        
                                    </div>
                                </div>
                                <div class="column">
                                    
                                    @error('password')
                                    <span class="notification" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        
                        <div class="field">
                            <label for="password-confirm" class="lable">{{ __('Confirmar contraseña') }}</label>
                            
                            <div class="column">
                                <input id="password-confirm" type="password" class="input" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        
                        <div class="field">
                            <div class="column">
                                <button type="submit" class="button is-primary">
                                    {{ __('Restablecer la contraseña') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
        @endsection
            