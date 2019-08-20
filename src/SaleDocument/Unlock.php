<?php

namespace Y2\SaleDocument;

class Unlock
{

    /**
     * @var Unlock_Request $unlockRequest
     */
    protected $unlockRequest = null;

    /**
     * @var RetailContext $clientContext
     */
    protected $clientContext = null;

    /**
     * @param Unlock_Request $unlockRequest
     * @param RetailContext $clientContext
     */
    public function __construct($unlockRequest, $clientContext)
    {
      $this->unlockRequest = $unlockRequest;
      $this->clientContext = $clientContext;
    }

    /**
     * @return Unlock_Request
     */
    public function getUnlockRequest()
    {
      return $this->unlockRequest;
    }

    /**
     * @param Unlock_Request $unlockRequest
     * @return Unlock
     */
    public function setUnlockRequest($unlockRequest)
    {
      $this->unlockRequest = $unlockRequest;
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
     * @return Unlock
     */
    public function setClientContext($clientContext)
    {
      $this->clientContext = $clientContext;
      return $this;
    }

}
