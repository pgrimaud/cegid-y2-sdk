<?php

namespace Y2\SaleDocument;

class GetByKey
{

    /**
     * @var GetByKey_Request $searchRequest
     */
    protected $searchRequest = null;

    /**
     * @var RetailContext $clientContext
     */
    protected $clientContext = null;

    /**
     * @param GetByKey_Request $searchRequest
     * @param RetailContext $clientContext
     */
    public function __construct($searchRequest, $clientContext)
    {
      $this->searchRequest = $searchRequest;
      $this->clientContext = $clientContext;
    }

    /**
     * @return GetByKey_Request
     */
    public function getSearchRequest()
    {
      return $this->searchRequest;
    }

    /**
     * @param GetByKey_Request $searchRequest
     * @return GetByKey
     */
    public function setSearchRequest($searchRequest)
    {
      $this->searchRequest = $searchRequest;
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
     * @return GetByKey
     */
    public function setClientContext($clientContext)
    {
      $this->clientContext = $clientContext;
      return $this;
    }

}
