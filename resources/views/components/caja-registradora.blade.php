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
        width: 85%;
        min-height: 10vh;
        margin: 20px;


    }
table{
    margin: 5px;
    width: 99%;
}
.delete-product{
    display: flex;
    justify-content: center;
    height:  33px;
}


th{border: solid black 0.7px;}
tr{border: solid  rgb(151, 151, 151) 0.7px;}
.total{border: solid gray 1px;width: 10vh;
        height: 10vh; margin: 5px;}
</style>
<div class="container-componente" >
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg flex flex-1 div-contenedor-caja" >
        <div class="aling-content" >
            <div class="container left-bar"></div>
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
                    <td class="delete-product"><img src="{{URL::asset("img/eliminar.png")}}" alt="Eliminar"></td>
                  </tr>
                  <tr >
                    <td>jdo-467657</td>
                    <td class="text-center">alfajor fantoche 35g</td>
                    <td class="text-center">5</td>
                    <td class="text-center">$5000</td>
                  </tr>
                </tbody>
              </table>
        </div>
    </div>
        <div class="container total"></div>
    </div>

</div>
