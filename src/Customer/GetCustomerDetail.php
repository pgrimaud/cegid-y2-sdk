<?php

namespace Y2\Customer;

class GetCustomerDetail
{
    /**
     * @var string $customerId
     */
    protected $customerId = null;

    /**
     * @var RetailContext $clientContext
     */
    protected $clientContext = null;

    /**
     * @param string        $customerId
     * @param RetailContext $clientContext
     */
    public function __construct($customerId, $clientContext)
    {
        $this->customerId    = $customerId;
        $this->clientContext = $clientContext;
    }

    /**
     * @return string
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * @param string $customerId
     *
     * @return GetCustomerDetail
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;
        return $this;
    }

    /**
     * @return RetailContext
     */
    public function getClientContext()
    {
        return $this->clientContext;
    }

    /**
     * @param RetailContext $clientContext
     *
     * @return GetCustomerDetail
     */
    public function setClientContext($clientContext)
    {
        $this->clientContext = $clientContext;
        return $this;
    }

}
