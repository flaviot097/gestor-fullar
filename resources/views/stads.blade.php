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
<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Deposito') }}
        </h2>
    </x-slot>

    <div>
        <!-- componente estadisticas -->
        @livewire('stads-component')

    </div>

</x-app-layout>
