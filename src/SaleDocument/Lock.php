<?php

namespace Y2\SaleDocument;

class Lock
{

    /**
     * @var Lock_Request $lockRequest
     */
    protected $lockRequest = null;

    /**
     * @var RetailContext $clientContext
     */
    protected $clientContext = null;

    /**
     * @param Lock_Request $lockRequest
     * @param RetailContext $clientContext
     */
    public function __construct($lockRequest, $clientContext)
    {
      $this->lockRequest = $lockRequest;
      $this->clientContext = $clientContext;
    }

    /**
     * @return Lock_Request
     */
    public function getLockRequest()
    {
      return $this->lockRequest;
    }

    /**
     * @param Lock_Request $lockRequest
     * @return Lock
     */
    public function setLockRequest($lockRequest)
    {
      $this->lockRequest = $lockRequest;
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
     * @return Lock
     */
    public function setClientContext($clientContext)
    {
      $this->clientContext = $clientContext;
      return $this;
    }

}
