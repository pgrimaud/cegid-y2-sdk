<?php

namespace Y2\SaleDocument;

class Cancel
{

    /**
     * @var Cancel_Request $cancelRequest
     */
    protected $cancelRequest = null;

    /**
     * @var RetailContext $clientContext
     */
    protected $clientContext = null;

    /**
     * @param Cancel_Request $cancelRequest
     * @param RetailContext $clientContext
     */
    public function __construct($cancelRequest, $clientContext)
    {
      $this->cancelRequest = $cancelRequest;
      $this->clientContext = $clientContext;
    }

    /**
     * @return Cancel_Request
     */
    public function getCancelRequest()
    {
      return $this->cancelRequest;
    }

    /**
     * @param Cancel_Request $cancelRequest
     * @return Cancel
     */
    public function setCancelRequest($cancelRequest)
    {
      $this->cancelRequest = $cancelRequest;
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
     * @return Cancel
     */
    public function setClientContext($clientContext)
    {
      $this->clientContext = $clientContext;
      return $this;
    }

}
