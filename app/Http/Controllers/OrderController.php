<?php

namespace App\Http\Controllers;

use App\Events\CreateOrderEvent;
use App\Models\Invoice;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{

    public function Create()
    {
        $ordenPedido = Order::Create([
            "mail_id" => 34,
            "cantidad" => 43,
            "descripcion" => "dedsadwedaedsd",
            "precio" => 345436
        ]);

        CreateOrderEvent::dispatch($ordenPedido);
        return response()->json("exito al");
    }
}