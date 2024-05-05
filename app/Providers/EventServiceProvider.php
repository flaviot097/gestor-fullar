<?php

namespace App\Providers;

use App\Events\CreateOrderEvent;
use App\Listeners\GenerateInvoiceListener;
use App\Models\User;
use App\Observers\UserObserver;
use Illuminate\Support\ServiceProvider;


class EventServiceProvider extends ServiceProvider
{

    protected $listen = [
        CreateOrderEvent::class => [
            GenerateInvoiceListener::class
        ]
    ];
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        User::observe(UserObserver::class);
        User::creating(function ($user) {
            if (!$user->isvalid()) {
                return false;
            }
        });
    }
    /**list events */


}