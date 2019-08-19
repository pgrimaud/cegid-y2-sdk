<?php

namespace Y2\Customer;

class SearchCustomerIdsResponse
{

    /**
     * @var ArrayOfCustomerQueryData $SearchCustomerIdsResult
     */
    protected $SearchCustomerIdsResult = null;

    /**
     * @param ArrayOfCustomerQueryData $SearchCustomerIdsResult
     */
    public function __construct($SearchCustomerIdsResult)
    {
        $this->SearchCustomerIdsResult = $SearchCustomerIdsResult;
    }

    /**
     * @return ArrayOfCustomerQueryData
     */
    public function getSearchCustomerIdsResult()
    {
        return $this->SearchCustomerIdsResult;
    }

    /**
     * @param ArrayOfCustomerQueryData $SearchCustomerIdsResult
     *
     * @return SearchCustomerIdsResponse
     */
    public function setSearchCustomerIdsResult($SearchCustomerIdsResult)
    {
        $this->SearchCustomerIdsResult = $SearchCustomerIdsResult;
        return $this;
    }

}
