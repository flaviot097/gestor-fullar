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
.list{
        border: solid black 0.4px;
        box-shadow: 10px 10px 10px rgb(172, 172, 172);
        padding: 20px;
        border-radius: 10px;
    }
.product{
        display: flex;
        justify-content: space-between;
        flex-direction: column;
        border-bottom: solid grey 0.05px;
        padding-left: 6px;
        border-radius: 10px;
        margin-left: 2%;
        width: 95%;
}
.product:hover{
    background-color: #5ec982;
}
.list-product{
    border: solid black 0.4px;
    box-shadow: 10px 10px 10px rgb(172, 172, 172);
    padding: 20px;
    border-radius: 10px;
    margin: 20px;
    min-height: 20px;
    width: 100%;
}
.text-box{
    text-decoration:underline;
    text-align:center ;
}
.save{
    margin-top: 10px;
}
.cards-product{
    display:flex;
    flex-direction: row;
}
.alert-danger{
    color: red;
    font-size: 13px;
}
</style>
</div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg flex flex-1" id="panel-header" style="justify-content:center;min-height: 200px; align-items: center;" >
                @if (url()->current()== "http://gestor-app.test/deposito")
                    @livewire('home-component')
                @endif
            </div>
        </div>
    </div>

