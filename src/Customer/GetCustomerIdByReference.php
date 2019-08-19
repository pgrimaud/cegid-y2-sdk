<?php

namespace Y2\Customer;

class GetCustomerIdByReference
{
    /**
     * @var string $customerReference
     */
    protected $customerReference = null;

    /**
     * @var RetailContext $clientContext
     */
    protected $clientContext = null;

    /**
     * @param string        $customerReference
     * @param RetailContext $clientContext
     */
    public function __construct($customerReference, $clientContext)
    {
        $this->customerReference = $customerReference;
        $this->clientContext     = $clientContext;
    }

    /**
     * @return string
     */
    public function getCustomerReference()
    {
        return $this->customerReference;
    }

    /**
     * @param string $customerReference
     *
     * @return GetCustomerIdByReference
     */
    public function setCustomerReference($customerReference)
    {
        $this->customerReference = $customerReference;
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
     * @return GetCustomerIdByReference
     */
    public function setClientContext($clientContext)
    {
        $this->clientContext = $clientContext;
        return $this;
    }

}
