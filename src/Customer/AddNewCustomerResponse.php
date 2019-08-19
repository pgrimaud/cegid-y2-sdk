<?php

namespace Y2\Customer;

class AddNewCustomerResponse
{
    /**
     * @var string $AddNewCustomerResult
     */
    protected $AddNewCustomerResult = null;

    /**
     * @param string $AddNewCustomerResult
     */
    public function __construct($AddNewCustomerResult)
    {
        $this->AddNewCustomerResult = $AddNewCustomerResult;
    }

    /**
     * @return string
     */
    public function getAddNewCustomerResult()
    {
        return $this->AddNewCustomerResult;
    }

    /**
     * @param string $AddNewCustomerResult
     *
     * @return AddNewCustomerResponse
     */
    public function setAddNewCustomerResult($AddNewCustomerResult)
    {
        $this->AddNewCustomerResult = $AddNewCustomerResult;
        return $this;
    }

}
