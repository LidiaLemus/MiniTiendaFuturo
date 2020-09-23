@extends('home')
@section('content')
<div class="container">

  <div class="card-content">
    <h1 class="title is-3">Registro Empleado</h1>


    <form method="post" action="{{route('employee.store')}}">
      {{csrf_field() }}

      <div class="field">
        <div class="control">
          <input class="input is-primary" type="text" name="fullname" placeholder="Nombre completo" required
            oninvalid="this.setCustomValidity('Por favor ingresa tu nombre completo')">
        </div>
      </div>
      <div class="field">
        <div class="control">
          <input class="input is-primary" type="text" name="address" placeholder="Direccion" required
            oninvalid="this.setCustomValidity('Por favor ingresa tu Direccion')">
        </div>
      </div>
      <div class="field">
        <div class="control">
          <input class="input is-primary" type="text" name="phone" placeholder="Telefono" required
            oninvalid="this.setCustomValidity('Por favor ingresa tu telefono')">
        </div>
      </div>
      <div class="field">
        <div class="control">
          <input class="input is-primary" type="text" name="email" placeholder="Correo Electronico" required
            oninvalid="this.setCustomValidity('Por favor ingresa tu correo electronico')">
        </div>
      </div>
      <div class="field">
        <div class="control">
          <input class="input is-primary" type="text" name="cui" placeholder="Numero de CUI Maximo 13 Caracteres"
            required oninvalid="this.setCustomValidity('Por favor ingresa tu CUI')">
        </div>
      </div>
      <br>
      <button class="button is-success is-focused">Guardar</button>
      <a class="button is-danger" href="{{route('employee.index')}}">Cancelar</a></td>
    </form>
  </div>
</div>
@endsection