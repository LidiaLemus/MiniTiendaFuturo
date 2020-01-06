{!! Form::open(array('url'=>'user','method'=>'GET','autocomplete'=>'off','role'=>'search')) !!}
<div>
    <div class="columns">
        <div class="column">
            <div class="level">
                <div class="level">
                        <div class="level-item">
                                <div class="field has-addons">
                                  <p class="control">
                                    <input class="input" type="text" placeholder="Buscar Producto" name="searchText">
                                  </p>
                                  <p class="control">
                                    <button class="button is-success">
                                      Buscar
                                    </button>
                                  </p>
                                </div>
                              </div>
                </div>
                    
            </div>
           
        </div>
        <div class="column"></div>
    </div>

</div> 

{{Form::close()}}
