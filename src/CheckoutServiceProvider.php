<?php

namespace Spatie\Checkout;

use Illuminate\Support\ServiceProvider;

class CheckoutServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(Checkout::class, function () {
            return $this->app->make('Spatie\Checkout\Checkout');
        });

        $this->app->alias(Checkout::class, 'checkout');
    }
}
