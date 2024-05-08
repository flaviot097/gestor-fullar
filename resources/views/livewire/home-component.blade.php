
<div class="container-list-forms" >
    <div action="" method="" class="form-container list">
        <div class="form-product">
            <h2 class="title">Agregar Producto</h2><br>
            <label for="Nombre de productos">Producto</label>
            <input type="text" class="imputs producto" wire:model.live="products" >
            <label for="Nombre de productos">Cantidad</label>
            <input type="text" class="imputs producto" wire:model="stock" >
            <label for="Nombre de productos">Precio</label>
            <input type="text" class="imputs producto" wire:model="price" >
            <label for="Coidgo">Codigo</label>
            <input type="text" class="imputs producto" wire:model.defer="codigo" >
            <button class="btn crear" type="" wire:click="createDivs">Listar</button>
        </div>
    </div>
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
