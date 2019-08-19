<?php

namespace Y2\Customer;

class AddNewCustomer
{
    /**
     * @var CustomerInsertData $customerData
     */
    protected $customerData = null;

    /**
     * @var RetailContext $clientContext
     */
    protected $clientContext = null;

    /**
     * @param CustomerInsertData $customerData
     * @param RetailContext      $clientContext
     */
    public function __construct($customerData, $clientContext)
    {
        $this->customerData  = $customerData;
        $this->clientContext = $clientContext;
    }

    /**
     * @return CustomerInsertData
     */
    public function getCustomerData()
    {
        return $this->customerData;
    }

    /**
     * @param CustomerInsertData $customerData
     *
     * @return AddNewCustomer
     */
    public function setCustomerData($customerData)
    {
        $this->customerData = $customerData;
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
     * @return AddNewCustomer
     */
    public function setClientContext($clientContext)
    {
        $this->clientContext = $clientContext;
        return $this;
    }

}
