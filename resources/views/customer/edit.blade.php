@extends('home')
@section('content')
<div class="container">

  <div class="card-content">
    <h1 class="title is-3">Editar Cliente</h1>
    <form method="post" action="{{route('customer.update',$customer->id)}}">
      @csrf
      @method('PATCH')
      {{csrf_field() }}

      <div class="field">
        <div class="control">
          <input class="input is-primary" type="text" name="fullname" placeholder="Nombre completo"
            value="{{$customer->fullname}}">
        </div>
        <div class="field">
          <div class="control">
            <input class="input is-primary" type="text" name="email" placeholder="correo" value="{{$customer->email}}"">
  </div>
  <div class=" field">
            <div class="control">
              <input class="input is-primary" type="text" name="address" placeholder="Direccion"
                value="{{$customer->address}}">
            </div>
            <div class="field">
              <div class="control">
                <input class="input is-primary" type="text" name="phone" placeholder="Numero de telefono"
                  value="{{$customer->phone}}">
              </div>
              <div class="field">
                <div class="control">
                  <input class="input is-primary" type="text" name="nit" placeholder="Nit" value="{{$customer->nit}}">
                </div>
                <br>
                <button class="button is-success is-focused">Aceptar Cambios</button>

    </form>
  </div>
</div>
@endsection