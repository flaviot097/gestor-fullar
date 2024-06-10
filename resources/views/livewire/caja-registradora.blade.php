<div class="container-componente" >
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg flex flex-1 div-contenedor-caja" >
            <div class="aling-content" >
                <div class="container left-bar">
                    <button class="btn-function select-caja">Caja 1</button>
                    <button class="btn-function select-caja">Caja 2</button>
                    <button class="btn-function select-caja">Caja 3</button>
                    <button class="btn-function select-caja">Caja 4</button>
                    <button class="btn-function select-caja">Caja 5</button>
                    <button class="btn-function query-product">Consultar productos</button>
                    <button class="btn-function ticket" onkeydown="tecla()"><img class="img-ticket" src="{{URL::asset("img/ticket.png")}}" alt="Hacer ticket">Ticket</button>
                </div>
                <div class="container count-product">

                   <label for="">Introducir Producto</label>
                   <input type="text" wire:keydown.enter="carge" name="inputP" wire:model="inputP" wire:keydown.up="closeSale" value="{{old("inputP")}}">
                   <label for="" wire:keydown.enter="carge" wire:model="quantityP" wire:keydown.up="closeSale">Cantidad<input type="number"></label>
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
                    @if ($loks)

                    @foreach ($arrayAcu as $lo)
                      <tr class="cards-prod" >
                        <td>{{$lo[2]}}</td>
                        <td class="text-center">{{$lo[1]}}</td>
                        <td class="text-center">{{$lo[3]}}</td>
                        <td class="text-center">{{($lo[0] * $lo[3])}}</td>
                        <td class="delete-product"><a href="" class="delete-product" id="{{$counts}}" ><img class="img-delete" src="{{URL::asset("img/eliminar.png")}}" alt="Eliminar"></a></td>
                      </tr>
                    @endforeach
                    @endif
                    </tbody>
                  </table>
            </div>
        </div>
            <div class="container-btn-total" >
                <button class="btn-function add-product" wire:click="carge" >Agregar Producto</button>
                <button class="btn-function money" ><img src="{{URL::asset("img/dinero-efectivo.png")}}" alt="Pagar en efectivo" class="efectivo" ></button>
                <button class="btn-function target" ><img src="{{URL::asset("img/tarjetas.png")}}" alt="pagar con tarjeta" class="tarjetas" ></button>
                <form method="POST" action="{{route("stad.create")}}" class="form-sales"> @csrf<button wire:click="colseSale" class="btn-function close-sale" style="height: 122%" type="submit" >Cerrar venta</button></form>
                <div class="container total">${{$total}}</div>
            </div>
        </div>

</div>

<script>
    const formSale = document.querySelector("form.form-sales");
    const divCard = document.getElementsByClassName("cards-prod");
    formSale.addEventListener("submit", (e) => {
        if(divCard.length == 0){
        e.preventDefault();
        window.location.href = "http://gestor-app.test/caja";
    }
    });
</script>
