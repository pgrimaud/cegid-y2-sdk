<?php

namespace Y2\Customer;

class UpdateCustomerResponse
{
    /**
     * @var string $UpdateCustomerResult
     */
    protected $UpdateCustomerResult = null;

    /**
     * @param string $UpdateCustomerResult
     */
    public function __construct($UpdateCustomerResult)
    {
        $this->UpdateCustomerResult = $UpdateCustomerResult;
    }

    /**
     * @return string
     */
    public function getUpdateCustomerResult()
    {
        return $this->UpdateCustomerResult;
    }

    /**
     * @param string $UpdateCustomerResult
     *
     * @return UpdateCustomerResponse
     */
    public function setUpdateCustomerResult($UpdateCustomerResult)
    {
        $this->UpdateCustomerResult = $UpdateCustomerResult;
        return $this;
    }

}
