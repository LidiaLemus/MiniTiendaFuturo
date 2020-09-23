@extends('home')
@section('content')

<div class="container">

  <div class="card-content">
    <h1 class="title is-3">Registro compra</h1>
    <div class="columns">
      <div class="column is-three-quarters">

        <form class="form" method="post" action="{{route('purchase.store')}}">
          {{csrf_field() }}
          <div class="columns">
            <div class="column">

              <h2>Proveedor</h2>
              <div class="select">
                <select name="provider_id">
                  @foreach($provider as $provider)
                  <option value=" {{$provider['id'] }}"> {{$provider['fullname']}}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="column">
              <h2>Producto</h2>
              <div class="select">
                <select name="product" id="pro">
                  @foreach($product as $product)
                  <option value="{{$product->id}}_{{$product->stock}}_{{$product->purchase_price}}"> {{$product->name}}
                  </option>
                  @endforeach
                </select>
              </div>

            </div>
          </div>
          <br>
          <br>
          <div class="control">
            <label for="quantity">STOCK</label>
            <input class="input" type="number" name="stock" id="stock">
          </div>
          <div>
            <label for="cantidad">Cantidad</label>
            <input class="input" id="cantidad" name="cantidad" type="number">
          </div>
          <div>
            <label for="purchase_price">Precio Compra</label>
            <input class="input" type="number" name="purchase_price" id="purchase_price">
          </div>
          <br>
          <div class="field">
            <div class="control">
              <a id="add"><input class="button is-success" type="button" value="Agregar"></a>
            </div>
          </div>

          <table class="table" id="detalle">
            <thead>
              <tr>
                <th></th>
                <th>Productos</th>
                <th>Cantidad</th>
                <th>Precio de Compra</th>
                <th>Sub-Total</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <td>Total</td>
                <td></td>
                <td>
                  <h4 id="total">Q/. 0.00</h4>
                  <input type="hidden" name="suma_total" id="suma_total">
                </td>
              </tr>
            </tfoot>
          </table>
          <div>
            <input name="_token" value="{{csrf_token()}}" type="hidden">
            <button class="button is-primary">Guardar</button>
            <button class="button is-danger" name="cancelar">cancelar</button>
          </div>
        </form>
      </div>
    </div>

    <div class="field">
      <div class="control">
        <input class="input is-primary " type="hidden" name="total" required>
      </div>
    </div>
  </div>
  <div class="column"></div>
</div>
</div>

<script>
  $(document).ready(function() {
        $('#add').click(function() {
          agregar();
        })
        mostrar();
      });

      var cont = 0;
      total = 0;
      subtotal = [];
      $('#guardar').hide();
      $('#pro').change(mostrar);
      
      function mostrar(){
        datos = document.getElementById('pro').value.split('_');
        $('#purchase_price').val(datos[2]);
        $('#stock').val(datos[1]);
      }

      function agregar(){
        datos = document.getElementById('pro').value.split('_');
        idproduct = datos[0];
        pdt = $('#pro option:selected').text();
        cantidad = $('#cantidad').val();
        purchase_price = $('#purchase_price').val();
        quantity = $('#stock').val();

        if (idproduct != "" && cantidad != "" && cantidad > 0 &&  purchase_price!="") {
          
            subtotal[cont] = (cantidad * purchase_price);
            total = total + subtotal[cont];

            var fila = '<tr class="selected" id="fila' + cont + '">' +
                  '<td><button class="button is-danger" onclick="eliminar(' + cont + ');">X</button></td>' +
                  '<td><input type="hidden" name="id_producto[]" value="' + idproduct + '">' + pdt + '</td>' +
                  '<td><input class="input" type="number" name="cantidad[]" value="' + cantidad + '"readonly></td>' +
                  '<td><input class="input" type="number" name="precio_compra[]" value="' + purchase_price + '" readonly></td>' +
                  '<td><input class="input" type="number" name="subtotal[]" value="' + subtotal[cont] + '" readonly</td></tr>';
                  cont++;

                  $('#total').html('Q/.' + total);
                  $('#suma_total').val(total);
                  limpiar();
                  $('#detalle').append(fila);
                  evaluar();
          
        }else{
          alert('no se puede realizar la compra');
        }
      }
      function limpiar() {
        $('#cantidad').val('');
        $('#stock').val('');
        $('#purchase_price').val('');
        
      }
      function evaluar (){
        if (total >0){
          $("guardar").show();
        }else{
          $("#guardar").hide();
        }
      }
    function eliminar(index){
      total = total - subtotal[index];
      $('#total').html("Q/." + total);
      $('#suma_total').val(total);
      $('#fila' + index).remove();
      evaluar();
    }
</script>


@endsection