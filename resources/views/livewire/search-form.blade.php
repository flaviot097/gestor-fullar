<div class="container-list-forms" >
    <div class="container-aling">
        <div action="" method="" class="form-container list">
            <div class="form-product">
                <h2 class="title">Buscar</h2>
                <label for="Nombre de productos">Producto</label>
                <input name="productsForm" type="text" name="product" class="imputs producto" wire:model.live="productsForm" >
                <label for="Coidgo">Codigo</label>
                <input name="codigoForm" type="text" name="code" class="imputs producto" wire:model.defer="codigoForm" >
                <button class="btn crear" type="" wire:click="search">buscar</button>
            </div>
        </div>
    </div>
    @if ($arrayProduct)
        @foreach ($arrayProduct as $item)
                    <h1>{{$item->name}}</h1>
        @endforeach


    @endif

    @livewire('table-component')


</div>
