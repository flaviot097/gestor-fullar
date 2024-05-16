<style>
    //caja registradora estilos
.container-componente{height: 83vh;margin-left: 10px;margin-right: 10px;}
.div-contenedor-caja{min-height: 98%;margin-top: 20px;
    display: flex;
    flex-direction: column;
    align-content: space-between;
    width: 100%;
    min-height: 320px
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
        width: 97%;
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
.stock-full{
    background-color: #007928;
}
.stock-fuel{
    background-color:#ff631a;
}
.stock-whating{
    background-color: rgb(179, 179, 80);
}
.py-12 {
    padding-top: 1rem;
    padding-bottom: 3rem;
}
</style>
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg flex flex-1 div-contenedor-caja" >
            <div class="container count-product">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Stock(unidades)</th>
                    <th scope="col">Codigo</th>
                    <th scope="col">Articulo</th>
                    <th scope="col">Precio</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                    @foreach (Illuminate\Support\Facades\DB::select("select * from products") as $item)
                    <tr>
                      <td class="text-center code">{{$item->code}}</td>
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

