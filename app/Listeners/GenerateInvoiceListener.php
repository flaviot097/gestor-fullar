<?php

namespace App\Listeners;

use App\Models\Invoice;
use App\Events\CreateOrderEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class GenerateInvoiceListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(object $event): void
    {
        Invoice::CreateOrder([
            "cantidad" => $event->order->cantidad,
            "orden_id" => $event->order->id,
            "descripcion" => $event->order->descripcion,
            'precio' => $event->order->precio

        ]);
    }
}
