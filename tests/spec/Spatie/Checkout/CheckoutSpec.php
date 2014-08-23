<?php

namespace spec\Spatie\Checkout;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

use Illuminate\Session\Store as Store;


class CheckoutSpec extends ObjectBehavior
{
    function let(Store $session)
    {
        $session->start();

        $this->beConstructedWith($session);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Spatie\Checkout\Checkout');
    }

    function it_stores_an_orderId()
    {
        $this->setCurrentOrderId('testvalue');

        $this->getCurrentOrderId()->shouldReturn('testvalue');

    }
}
