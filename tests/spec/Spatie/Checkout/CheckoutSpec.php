<?php

namespace spec\Spatie\Checkout;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

use Illuminate\Session\Store as Store;


class CheckoutSpec extends ObjectBehavior
{

    protected $sessionParameterName = 'spatie.checkout.currentOrderId';
    protected $testOrderId = 'test123';


    function let(Store $session)
    {
        $session->start();

        $this->beConstructedWith($session);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Spatie\Checkout\Checkout');
    }

    function it_stores_an_orderId(Store $session)
    {
        $session->set($this->sessionParameterName, $this->testOrderId)->shouldBeCalled();

        $this->setCurrentOrderId( $this->testOrderId);
    }

    function it_can_retrieve_an_orderId(Store $session)
    {
        $session->get($this->sessionParameterName)->shouldBeCalled()->willReturn($this->testOrderId);

        $this->getCurrentOrderId()->shouldReturn($this->testOrderId);
    }

    function it_can_check_if_given_order_id_is_order_id_in_session(Store $session)
    {
        $session->get($this->sessionParameterName)->shouldBeCalled()->willReturn($this->testOrderId);

        $this->isCurrentOrderId($this->testOrderId)->shouldReturn(true);
    }

    function it_will_return_false_if_given_order_id_is_not_equal_to_order_id_in_session(Store $session)
    {
        $session->get($this->sessionParameterName)->shouldBeCalled()->willReturn($this->testOrderId);

        $this->isCurrentOrderId('somethingElse')->shouldReturn(false);
    }

    function it_can_clear_the_previous_stored_order_id(Store $session)
    {
        $session->forget($this->sessionParameterName)->shouldBeCalled();

        $this->clearCurrentOrderId();
    }
}
