@section('aside')

      
    <aside>
      <p class="menu-label">General</p>
      <ul class="menu-list">
        <li>
          <a href="{{route('home')}}" class="">
            <span class="icon"><i class="fa fa-home"></i></span>Inicio
          </a>
        </li>
        <li>
          
          <a href="#" class="is-active">
            <span class="icon"><i class="fa fa-folder-open"></i></span> Area de Venta
          </a>

          <ul>

            <li>
              <a href="{{route('sale.create')}}">
                <span class="icon is-small"><i class="fas fa-shopping-basket"></i></span> vender
              </a>
            </li>
            <li>
              <a href="{{route('sale.index')}}">
                <span class="icon is-small"><i class="fas fa-list"></i></span> Ventas
              </a>
            </li>
           
           
          </ul>
        </li>
      </ul>
      <ul class="menu-list">  
          <a href="" class="is-active">
            <span class="icon"><i class="fa fa-folder-open"></i></span>Area de Compra
          </a>
          <ul>
          <li>
              <a href="{{route('product.index')}}">
                <span class="icon is-small"><i class="fas fa-th-list"></i></span>Inventario
              </a>
            </li>
            <li>
              <a href="{{route('purchase.create')}}">
                <span class="icon is-small"><i class="fas fa-shopping-cart"></i></span> Comprar
              </a>
            </li>
            <li>
              <a href="{{route('purchase.index')}}">
                <span class="icon is-small"><i class="fas fa-list-alt"></i></span> Compras
              </a>
            </li>
            
          </ul>
        </li>
      </ul>
      <ul class="menu-list">  
          <a href="" class="is-active">
            <span class="icon"><i class="fa fa-folder-open"></i></span>Tipo de Persona
          </a>
          <ul>
          <li>
              <a href="{{route('customer.index')}}">
                <span class="icon is-small"><i class="fas fa-user-friends"></i></span> Cliente
              </a>
            </li>
            <li>
              <a href="{{route('provider.index')}}">
                <span class="icon is-small"><i class="fas fa-user-alt"></i></span> Proveedor
              </a>
            </li>
            <li>
            <li>
              <a href="{{route('employee.index')}}">
                <span class="icon is-small"><i class="fas fa-user-alt"></i></span> Empleado
              </a>
            </li>
            <li>
              <a href="{{route('user.index')}}">
                <span class="icon is-small"><i class="fas fa-users"></i></span> Usuario
              </a>
            </li>
          </ul>
        </li>
      </ul>
      <ul class="menu-list">  
          <a href="" class="is-active">
            <span class="icon"><i class="fa fa-folder-open"></i></span>Area de producto
          </a>
          <ul>
          <li>
              <a href="{{route('product.create')}}">
                <span class="icon is-small"><i class="fab fa-product-hunt"></i></span> Registrar producto
              </a>
            </li>
           
              <a href="{{route('company.index')}}">
                <span class="icon is-small"><i class="fas fa-building"></i></span> Compañia
              </a>
            </li>
            
          </ul>
        </li>
      </ul>
    </aside>
    
  
  @endsection