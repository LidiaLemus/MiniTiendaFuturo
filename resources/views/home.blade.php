@extends('layouts.app')
@section('content')
<div class="container">

    <div class="card-body">
        @if(session ('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
        @endif
        <br>
        <br>
        <div class="columns">
            <div class="column">
                <img src="{{ asset('imagenes/imagen1.jpg') }}" alt="imagen" width="300" height="30">
                <br>
                <br>
            </div>
            <div class="column">
                <div class="level">
                    <div class="level-right">
                        <h2 class="title animated infinite bounce delay-2s">Sistema Inventario</h2>

                    </div>
                    <div class="level-left"></div>
                </div>
                <div class="level">
                    <div class="level-right">
                        <img src="{{ asset('imagenes/imagen6.jpg') }}" alt="imagen" width="300" height="120">

                    </div>
                    <div class="level-left"></div>
                </div>


            </div>
            <div class="column">

                <img src="{{ asset('imagenes/imagen3.jpg') }}" alt="imagen" width="300" height="30">
            </div>


        </div>
        <div class="columns">
            <div class="column">
                <h4>Bienvenido . {{ auth()->user()->name }} </h4>

            </div>
            <div class="column">

            </div>
            <div class="column">

            </div>
        </div>
        <div>
        </div>
        @extends('layouts.aside')
    </div>
</div>
</div>
@endsection