
<div class="container-list-forms" >
    <form action="{{route("product.create")}}" method="post" class="form-container list">
        @csrf
        <div class="form-product">
            <h2 class="title">Agregar Producto</h2><br>
            <label for="Nombre de productos">Producto</label>
            @error('product')
                <div class="alert alert-danger">*{{$message}}</div>
            @enderror
            <input type="text" name="product" class="imputs producto" wire:model.live="products" value="{{old("product")}}">

            <label  for="Estock">Cantidad</label>
            @error('stock')
                <div class="alert alert-danger">*{{$message}}</div>
            @enderror
            <input name="stock" type="text" class="imputs producto" wire:model.live="stock" >
            <label for="Precio">Precio</label>
            @error('price')
                <div class="alert alert-danger">*{{$message}}</div>
            @enderror
            <input name="price" type="text" class="imputs producto" wire:model.live="price" >
            <label for="Departamento">Departamento</label>
            @error('departamento')
                <div class="alert alert-danger">*{{$message}}</div>
            @enderror
            <input type="text" name="departamento" class="imputs producto" wire:model.live="deptoForm" >

            <label for="Coidgo">Codigo</label>
            @error('code')
                <div class="alert alert-danger">*{{$message}}</div>
            @enderror
            <input name="code" type="text" class="imputs producto" wire:model.defer="codigo" >
            <button class="btn crear" type="submit" wire:click="createDivs">Listar</button>
        </div>
    </form>

</div>
