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
                <span wire:loading>Buscando...</span>
            </div>
        </div>
    </div>
    @if ($arrayProduct)
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
        @foreach ($arrayProduct as $item)
                              <tr>
                                <td class="text-center code {{$clase}}">{{$item->code}}</td>
                                <td class="text-center">{{$item->name_product}}</td>
                                <td class="text-center stock">{{$item->stock}}</td>
                                <td class="text-center">${{$item->price}}</td>
                                <td class="delete-product"><a href="" id="{{$item->code}}" class="delete-product" wire:click="delete({{ $item->id }})" ><img class="img-delete" src="{{URL::asset("img/eliminar.png")}}" alt="Eliminar"></a></td>
                              </tr>
        @endforeach
            </tbody>
            </table>
        </div>
    </div>
    @endif

    @livewire('table-component')

</div>

