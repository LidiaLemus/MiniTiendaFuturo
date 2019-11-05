@extends('home')
@section('content')
        <div class="container">
        
        <div class="card-content">
        <h1 class="title is-3">Editar Proveedor</h1>
        <form method="post" action="{{route('provider.update',$provider->id)}}">
        @csrf
     	@method('PATCH')
    {{csrf_field() }}

    <div class="field">
  <div class="control">
    <input class="input is-primary" type="text" name="fullname" placeholder="Nombre completo" value="{{$provider->fullname}}">
  </div>
  <div class="field">
  <div class="control">
    <input class="input is-primary" type="text" name="phone" placeholder="Telefono" value="{{$provider->phone}}"">
  </div>
  <div class="field">
  <div class="control">
    <input class="input is-primary" type="text" name="email" placeholder="Correo Electronico" value="{{$provider->email}}">
  </div>
</div>
<select name="company_id" multiple size="3">
 @foreach($company as $company)
  
   <option value=" {{$company['id'] }}" 
   
   @if($company->id === $provider->company_id )
            selected
            @endif
   >{{$company['name']}}</option>
   @endforeach 
 </select>
 </div>
 
  <br>
  <button class="button is-success is-focused">Aceptar Cambios</button>
  
    </form>
        </div>
        </div>
   @endsection