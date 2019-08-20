<?php

namespace Y2\SaleDocument;

class Create
{

    /**
     * @var Create_Request $createRequest
     */
    protected $createRequest = null;

    /**
     * @var RetailContext $clientContext
     */
    protected $clientContext = null;

    /**
     * @param Create_Request $createRequest
     * @param RetailContext $clientContext
     */
    public function __construct($createRequest, $clientContext)
    {
      $this->createRequest = $createRequest;
      $this->clientContext = $clientContext;
    }

    /**
     * @return Create_Request
     */
    public function getCreateRequest()
    {
      return $this->createRequest;
    }

    /**
     * @param Create_Request $createRequest
     * @return Create
     */
    public function setCreateRequest($createRequest)
    {
      $this->createRequest = $createRequest;
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
     * @return Create
     */
    public function setClientContext($clientContext)
    {
      $this->clientContext = $clientContext;
      return $this;
    }

}
