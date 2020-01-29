@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card-content">

        <div class="columns">   
            <div class="column">
                
                <div class="hero-body">{{ __('Verifique su dirección de correo electrónico') }}</div>
                <div>
                    @if (session('resent'))
                    <div class="notification" role="alert">
                        {{ __('Se ha enviado un nuevo enlace de verificación a su dirección de correo electrónico.') }}
                    </div>
                    @endif
                    
                    {{ __('Antes de continuar, revise su correo electrónico para obtener un enlace de verificación.') }}
                    {{ __('Si no recibiste el correo electrónico.') }},
                    <form class="form" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="button is-info">{{ __('haga clic aquí para solicitar otro') }}</button>.
                    </form>
                </div>
            </div>
            <div class="column"></div>
            <div class="column"> </div>
        </div>
    </div>
                
</div>
@endsection
