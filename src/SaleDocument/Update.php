<?php

namespace Y2\SaleDocument;

class Update
{

    /**
     * @var Update_Request $updateRequest
     */
    protected $updateRequest = null;

    /**
     * @var RetailContext $clientContext
     */
    protected $clientContext = null;

    /**
     * @param Update_Request $updateRequest
     * @param RetailContext $clientContext
     */
    public function __construct($updateRequest, $clientContext)
    {
      $this->updateRequest = $updateRequest;
      $this->clientContext = $clientContext;
    }

    /**
     * @return Update_Request
     */
    public function getUpdateRequest()
    {
      return $this->updateRequest;
    }

    /**
     * @param Update_Request $updateRequest
     * @return Update
     */
    public function setUpdateRequest($updateRequest)
    {
      $this->updateRequest = $updateRequest;
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
     * @return Update
     */
    public function setClientContext($clientContext)
    {
      $this->clientContext = $clientContext;
      return $this;
    }

}
