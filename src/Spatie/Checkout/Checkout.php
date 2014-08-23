<?php namespace Spatie\Checkout;

use Illuminate\Session\Store;

class Checkout {

    private $sessionVariableName = 'spatie.checkout.currentOrderId';

    /**
     * @var \Illuminate\Session\Store
     */
    private $session;

    /**
     * @param Store $session
     */
    function __construct(Store $session)
    {
        $this->session = $session;
    }

    /**
     * Set the current order id
     *
     * @param $orderId
     */
    public function setCurrentOrderId($orderId)
    {
        $this->session->set($this->sessionVariableName, $orderId);
    }

    /**
     * Get the current order id
     *
     * @return mixed
     */
    public function getCurrentOrderId()
    {
        return $this->session->get($this->sessionVariableName);
    }

    /**
     * Clear the current order id
     *
     */
    public function clearCurrentOrderId()
    {
        $this->session->forget($this->sessionVariableName);
    }

    /**
     * Check if the given order id is the current order id
     *
     * @param $orderId
     * @return bool
     */
    public function isCurrentOrderId($orderId)
    {
        return ($this->getCurrentOrderId() == $orderId);
    }

}