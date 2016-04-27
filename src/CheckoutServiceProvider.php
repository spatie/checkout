<?php

namespace Spatie\Checkout;

use Illuminate\Support\ServiceProvider;

class CheckoutServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(Checkout::class);

        $this->app->alias(Checkout::class, 'checkout');
    }
}
