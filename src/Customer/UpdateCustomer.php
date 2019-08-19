<?php

namespace Y2\Customer;

class UpdateCustomer
{
    /**
     * @var string $customerId
     */
    protected $customerId = null;

    /**
     * @var CustomerInputData $modifiedData
     */
    protected $modifiedData = null;

    /**
     * @var RetailContext $clientContext
     */
    protected $clientContext = null;

    /**
     * @param string            $customerId
     * @param CustomerInputData $modifiedData
     * @param RetailContext     $clientContext
     */
    public function __construct($customerId, $modifiedData, $clientContext)
    {
        $this->customerId    = $customerId;
        $this->modifiedData  = $modifiedData;
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
     * @return UpdateCustomer
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;
        return $this;
    }

    /**
     * @return CustomerInputData
     */
    public function getModifiedData()
    {
        return $this->modifiedData;
    }

    /**
     * @param CustomerInputData $modifiedData
     *
     * @return UpdateCustomer
     */
    public function setModifiedData($modifiedData)
    {
        $this->modifiedData = $modifiedData;
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
     * @return UpdateCustomer
     */
    public function setClientContext($clientContext)
    {
        $this->clientContext = $clientContext;
        return $this;
    }

}
