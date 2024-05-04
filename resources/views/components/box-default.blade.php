<style>
.container-componente{height: 83vh;margin-left: 10px;margin-right: 10px;}
.div-contenedor-caja{min-height: 98%;margin-top: 20px;
        display: flex;
        flex-direction: column;
        align-content: space-between;
        }
.form-product{
    align-items: center;
    display: flex;
    flex-direction: column;
}
.form-container{width: 100%;
    align-items: center;
    display: flex;
    flex-direction: column;
    margin: 20px;

}
.imputs{
    margin-top: 5px;
    margin-bottom: 5px;
}
.btn{
    margin-top: 5px;
    margin-bottom: 5px;
    background-color: darkgrey;
    border: solid gray 0.7px;
    width: 100%;
    height: 40px;
}
.btn:hover{
    box-shadow: 10px 10px 10px rgb(172, 172, 172);
    background-color: rgb(202, 202, 202);
}
.title{
    text-decoration: underline;
    font-size:large;
    font-weight:900 !important;
    letter-spacing: 2px !important;
}
</style>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg flex flex-1" id="panel-header" style="justify-content:space-between;min-height: 200px; align-items: center;" >
                <div>
                    <button >gfdgdf</button>
                    @livewire('AppLayout')
                </div>
                @if (url()->current()== "http://gestor-app.test/deposito")
                    <form action="" method="" class="form-container">
                        <div class="form-product">
                            <h2 class="title">Agregar Producto</h2><br>
                            <label for="Nombre de productos">Producto</label>
                            <input type="text" class="imputs producto">
                            <label for="Coidgo">Codigo</label>
                            <input type="text" class="imputs codigo">
                            <label for="Precio">Precio</label>
                            <input type="number" class="imputs precio">
                            <label for="Nombre de productos">Producto</label>
                            <input type="text" class="imputs producto">
                            <button class="btn crear" type="">Agregar</button>
                        </div>
                    </form>
                @endif

            </div>
        </div>
    </div>

