<?php

namespace Y2\Customer;

class SearchCustomerIds
{
    /**
     * @var CustomerSearchDataType $searchData
     */
    protected $searchData = null;

    /**
     * @var RetailContext $clientContext
     */
    protected $clientContext = null;

    /**
     * @param CustomerSearchDataType $searchData
     * @param RetailContext          $clientContext
     */
    public function __construct($searchData, $clientContext)
    {
        $this->searchData    = $searchData;
        $this->clientContext = $clientContext;
    }

    /**
     * @return CustomerSearchDataType
     */
    public function getSearchData()
    {
        return $this->searchData;
    }

    /**
     * @param CustomerSearchDataType $searchData
     *
     * @return SearchCustomerIds
     */
    public function setSearchData($searchData)
    {
        $this->searchData = $searchData;
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
     * @return SearchCustomerIds
     */
    public function setClientContext($clientContext)
    {
        $this->clientContext = $clientContext;
        return $this;
    }

}
