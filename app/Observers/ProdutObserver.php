<?php

namespace App\Observers;

use App\Models\Product;

class ProdutObserver
{
    /**
     * Handle the Product "created" event.
     */
    public function created(Product $product): void
    {
        echo "fila da puta";
    }

    /**
     * Handle the Product "updated" event.
     */
    public function updated(Product $product): void
    {
        //
    }

    /**
     * Handle the Product "deleted" event.
     */
    public function deleted(Product $product): void
    {
        //
    }

    /**
     * Handle the Product "restored" event.
     */
    public function restored(Product $product): void
    {
        //
    }

    /**
     * Handle the Product "force deleted" event.
     */
    public function forceDeleted(Product $product): void
    {
        //
    }
}