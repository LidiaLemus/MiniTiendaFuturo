@extends('layouts.app')

@section('content')

                    <div class="container">
                    <div class="card-content">
                    
                    <form method="POST" action="{{ route('register') }}" class="is-primary">
                        @csrf
                           
                                <div class="field">
                                <label class="label">Nombre</label>
                                <div class="control">
                                <input id="name" type="text" class="input" name="name" value="{{ old('name') }}" required autocomplete="name" >
                                </div>
                                </div>

                                <div class="field">
                                <label class="label">Direccion</label>
                                <div class="control">
                                <input id="address" type="text" class="input" name="address" value="{{ old('address') }}" required autocomplete="address" >
                                </div>
                                </div>
                            
                                <div class="field">
                                <label class="label">Telefono</label>
                                <div class="control">
                                <input id="phone" type="text" class="input" name="phone" value="{{ old('phone') }}" required autocomplete="phone" >
                                </div>
                                </div>
                            <div class="field">
                            <div class="control">
                            <label class="label">Direccion de Correo Electronico</label>

                           
                                <input id="email" type="email" class="input" name="email" value="{{ old('email') }}" required autocomplete="email">
                                </div>
                               </div>
                          

                            <div class="field">
                            <div class="control">
                            <label class="label">Contraseña</label>

                                      
                                <input id="password" type="password" class="input" name="password" placeholder="Tu contraseña debe de mayor a 8 digitos" required>

                               
                            </div>
                        </div>

                        <div class="field">
                            <label class="label">Confirmacion de Contraseña </label>

                            <div class="control">
                                <input id="password-confirm" type="password" class="input" name="password_confirmation" placeholder="Tu contraseña debe de mayor a 8 digitos" required>
                            </div>
                        </div>

                        <div class="control">
                                
                                <button type="submit" class="button is-primary">
                                    Registrarse
                                </button>
                          
                        </div>
                    </form>
               </div>
               </div>
@endsection
