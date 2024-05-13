<div class="container-list-forms" >
    <div class="container-aling">
        <div action="" method="" class="form-container list">
            <div class="form-product">
                <h2 class="title">Buscar</h2>
                <label for="Nombre de productos">Producto</label>
                <input type="text" name="products" class="imputs producto @error('search') is-invalid @enderror" wire:model.live="products" value="{{old("product")}}">
                @error('search')
                        <span class="invalid-feedback">
                            <strong>{{$message}}</strong>
                        </span>
                @enderror
                <label for="Coidgo">Codigo</label>
                <input name="codigo" type="text" name="codigo" class="imputs producto" wire:model.defer="codigo" >
                <button class="btn crear" type="" wire:click="search">buscar</button>
            </div>
        </div>
    </div>
    @if ($arrayProduct)
        @foreach ($arrayProduct as $item)
                    <h1>{{$item->name_product}}</h1>
                    <div class="aling-content" >
                        <div class="container count-product">
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">Codigo</th>
                                <th scope="col">Articulo</th>
                                <th scope="col">Cantidad</th>
                                <th scope="col">Precio</th>
                                <th scope="col"></th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>{{$item->code}}</td>
                                <td class="text-center">{{$item->name_product}}</td>
                                <td class="text-center">{{$item->stock}}</td>
                                <td class="text-center">{{$item->price}}</td>
                                <td class="delete-product"><a href="" id="{{$item->code}}" class="delete-product" ><img class="img-delete" src="{{URL::asset("img/eliminar.png")}}" alt="Eliminar"></a></td>
                              </tr>
                              <tr >
                                <td>jdo-467657</td>
                                <td class="text-center">alfajor fantoche 35g</td>
                                <td class="text-center">5</td>
                                <td class="text-center">$5000.00</td>
                                <td class="delete-product"><a href="" class="delete-product"><img class="img-delete" src="{{URL::asset("img/eliminar.png")}}" alt="Eliminar"></a></td>
                              </tr>
                            </tbody>
                          </table>
                    </div>
                </div>
        @endforeach


    @endif

    @livewire('table-component')


</div>
