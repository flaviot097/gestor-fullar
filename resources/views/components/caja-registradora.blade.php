<style>
.container-componente{height: 83vh;margin-left: 10px;margin-right: 10px;}
.div-contenedor-caja{min-height: 98%;margin-top: 20px;
    display: flex;
    flex-direction: column;
    align-content: space-between;
    }
.container{
        border:  solid gray 1px;
        background-color:#bdbdbd;
        box-shadow:  20px 20px 60px #a1a1a1,
             -20px -20px 60px #d9d9d9;
        border-radius: 5px;
    }
.aling-content{
    flex-wrap: wrap;
    display: flex;
    justify-content: space-around;
    }
.count-product{
        width: 90%;
        min-height: 10vh;
        margin: 10px;


    }
table{
    margin: 5px;
    width: 99%;
}
.delete-product{
    display: flex;
    justify-content: center;
    height:  33px;
    padding-bottom: 4px;
}
.img-delete{
    filter: drop-shadow(1.5px 1.5px 1.5px #ff7f7f);
}
.left-bar{
    height: 67vh;
    width: 7%;
    margin: 10px;
    margin-right: -2px !important;
}

th{border: solid black 0.7px; background-color: lightblue; border-radius: 5px;}
tr{border: solid  rgb(151, 151, 151) 0.7px;}
tr:hover{background-color: #5ec982;}
.total{border: solid gray 1px;width: 40vh;
        height: 7vh; margin: 5px;
        font-size: 3.6vh;
        font-weight: 800;
        display: flex;
        align-items: center;
        justify-content: center;

        }

.container-btn-total{
    width: 99%;
    margin: 5px;
    display: flex;
    justify-content: flex-end;
}
.efectivo {
    width: 7vh;
    height: 7vh;
    margin-left: 10px;
    margin-right: 10px;
}
.tarjetas{
    width: 7vh;
    margin-left: 10px;
    margin-right: 10px;
}
.btn-function{
    border: solid black 0.8px;
    margin-left: 10px;
    margin-right: 10px;
    border-radius: 7px;
}
.close-sale, .add-product{
    padding-left: 10px;
    padding-right: 10px;
    }
.select-caja, .query-product ,.ticket{
    padding: 5px;
    margin-top: 10px;
    margin-bottom: 10px;
    width: 84%;
    background-color: white;

}
.select-caja:hover, .query-product:hover{
    background-color: #4c71c8;
}
.add-product:hover, .money:hover, .target:hover ,.close-sale:hover ,.ticket:hover{background-color: #5ec982}
</style>
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
                <button class="btn-function ticket"><img class="img-ticket" src="{{URL::asset("img/ticket.png")}}" alt="Hacer ticket">Ticket</button>
            </div>
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
                    <td>dfr-326373</td>
                    <td class="text-center">lavandina x2 Litros</td>
                    <td class="text-center">1</td>
                    <td class="text-center">$4500.00</td>
                    <td class="delete-product"><a href="" class="delete-product" ><img class="img-delete" src="{{URL::asset("img/eliminar.png")}}" alt="Eliminar"></a></td>
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
        <div class="container-btn-total" >
            <button class="btn-function add-product" >Agregar Producto</button>
            <button class="btn-function money" ><img src="{{URL::asset("img/dinero-efectivo.png")}}" alt="Pagar en efectivo" class="efectivo" ></button>
            <button class="btn-function target" ><img src="{{URL::asset("img/tarjetas.png")}}" alt="pagar con tarjeta" class="tarjetas" ></button>
            <button class="btn-function close-sale" >Cerrar venta</button>
            <div class="container total">$9500.00</div>
        </div>
    </div>

</div>
