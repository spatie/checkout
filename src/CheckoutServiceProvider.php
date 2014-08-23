<?php namespace Spatie\Checkout;

use Illuminate\Support\ServiceProvider;

class CheckoutServiceProvider extends ServiceProvider {

    /**
     * Create binding
     */
    public function register()
    {
        $this->app->bindShared('checkout', function()
        {
            return $this->app->make('Spatie\Checkout\Checkout');
        });
    }

}