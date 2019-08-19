<?php

namespace Y2\Customer;

class GetCustomerIdByReferenceResponse
{
    /**
     * @var string $GetCustomerIdByReferenceResult
     */
    protected $GetCustomerIdByReferenceResult = null;

    /**
     * @param string $GetCustomerIdByReferenceResult
     */
    public function __construct($GetCustomerIdByReferenceResult)
    {
        $this->GetCustomerIdByReferenceResult = $GetCustomerIdByReferenceResult;
    }

    /**
     * @return string
     */
    public function getGetCustomerIdByReferenceResult()
    {
        return $this->GetCustomerIdByReferenceResult;
    }

    /**
     * @param string $GetCustomerIdByReferenceResult
     *
     * @return GetCustomerIdByReferenceResponse
     */
    public function setGetCustomerIdByReferenceResult($GetCustomerIdByReferenceResult)
    {
        $this->GetCustomerIdByReferenceResult = $GetCustomerIdByReferenceResult;
        return $this;
    }

}
