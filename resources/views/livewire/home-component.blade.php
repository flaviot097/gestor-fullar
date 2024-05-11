
<div class="container-list-forms" >
    <form action="{{route("product.create")}}" method="post" class="form-container list">
        @csrf
        <div class="form-product">
            <h2 class="title">Agregar Producto</h2><br>
            <label for="Nombre de productos">Producto</label>
            <input type="text" name="product" class="imputs producto @error("products") is-invalid @enderror" wire:model.live="products" value="{{old("product")}}">
            @error('product')
                    <span class="invalid-feedback">
                        <strong>{{$message}}</strong>
                    </span>
            @enderror
            <label  for="Nombre de productos">Cantidad</label>
            <input name="stock" type="text" class="imputs producto" wire:model="stock" >
            <label for="Nombre de productos">Precio</label>
            <input name="price" type="text" class="imputs producto" wire:model="price" >
            <label for="Coidgo">Departamento</label>
            <input type="text" name="departamento" class="imputs producto" wire:model.defer="deptoForm" >
            <label for="Coidgo">Codigo</label>
            <input name="code" type="text" class="imputs producto" wire:model.defer="codigo" >
            <button class="btn crear" type="submit" wire:click="createDivs">Listar</button>
        </div>
    </form>
    @if ($state1 == true)
        <div class="list-product">
            <h2 class="text-box">Productos</h2>
            @foreach ($nameProducts as $product)
                <div class="cards-product">
                    <span class="spam-numer" wire:model="in">{{$in++}}</span><div class="product">{{$product}}</div>
                </div>
            @endforeach
            <button class="btn save" wire:click="save">Agregar a stock</button>
        </div>
    @endif

</div>
