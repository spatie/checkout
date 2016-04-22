<?php

namespace Spatie\Checkout;

use Illuminate\Support\Facades\Facade;

class CheckoutFacade extends Facade
{
    /**
     * @see \Spatie\Checkout\Checkout
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'checkout';
    }
}
