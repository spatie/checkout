<?php namespace Spatie\Checkout;

use Illuminate\Support\Facades\Facade;

class CheckoutFacade extends Facade {

    /**
     * Get the binding in the IoC container
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'checkout';
    }

}