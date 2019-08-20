<?php

namespace Y2\SaleDocument;

class GetByExternalReference
{

    /**
     * @var GetByExternalReference_Request $searchRequest
     */
    protected $searchRequest = null;

    /**
     * @var RetailContext $clientContext
     */
    protected $clientContext = null;

    /**
     * @param GetByExternalReference_Request $searchRequest
     * @param RetailContext $clientContext
     */
    public function __construct($searchRequest, $clientContext)
    {
      $this->searchRequest = $searchRequest;
      $this->clientContext = $clientContext;
    }

    /**
     * @return GetByExternalReference_Request
     */
    public function getSearchRequest()
    {
      return $this->searchRequest;
    }

    /**
     * @param GetByExternalReference_Request $searchRequest
     * @return GetByExternalReference
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
     * @return GetByExternalReference
     */
    public function setClientContext($clientContext)
    {
      $this->clientContext = $clientContext;
      return $this;
    }

}
