<?php

namespace Y2\SaleDocument;

class GetHeaderList
{

    /**
     * @var GetHeaderList_Request $searchRequest
     */
    protected $searchRequest = null;

    /**
     * @var RetailContext $clientContext
     */
    protected $clientContext = null;

    /**
     * @param GetHeaderList_Request $searchRequest
     * @param RetailContext $clientContext
     */
    public function __construct($searchRequest, $clientContext)
    {
      $this->searchRequest = $searchRequest;
      $this->clientContext = $clientContext;
    }

    /**
     * @return GetHeaderList_Request
     */
    public function getSearchRequest()
    {
      return $this->searchRequest;
    }

    /**
     * @param GetHeaderList_Request $searchRequest
     * @return GetHeaderList
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
     * @return GetHeaderList
     */
    public function setClientContext($clientContext)
    {
      $this->clientContext = $clientContext;
      return $this;
    }

}
