@extends('home')
@section('content')
<div class="container">

  <div class="card-content">
    <h1 class="title is-3">Usuario</h1>
    <form method="post" action="{{route('user.update',$user->id)}}">
      @csrf
      @method('PATCH')
      {{csrf_field() }}

      <div class="field">
        <div class="control">
          <input class="input is-primary" type="text" name="name" placeholder="Nombre completo" value="{{$user->name}}">
        </div>
        <div class="field">
          <div class="control">
            <input class="input is-primary" type="text" name="address" placeholder="Direccion"
              value="{{$user->address}}">
          </div>
        </div>

        <div class="field">
          <div class="control">
            <input class="input is-primary" type="text" name="phone" placeholder="Numero de telefono"
              value="{{$user->phone}}">
          </div>
          <div class="field">
            <div class="control">
              <input class="input is-primary" type="text" name="email" placeholder="ejemplo:lidia@gmail.com"
                value="{{$user->email}}">
            </div>
          </div>

          <button class="button is-success is-focused">Aceptar Cambios</button>

    </form>
  </div>
</div>
@endsection