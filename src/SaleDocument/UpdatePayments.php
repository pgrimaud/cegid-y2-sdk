<?php

namespace Y2\SaleDocument;

class UpdatePayments
{

    /**
     * @var UpdatePayments_Request $updatePaymentsRequest
     */
    protected $updatePaymentsRequest = null;

    /**
     * @var RetailContext $clientContext
     */
    protected $clientContext = null;

    /**
     * @param UpdatePayments_Request $updatePaymentsRequest
     * @param RetailContext $clientContext
     */
    public function __construct($updatePaymentsRequest, $clientContext)
    {
      $this->updatePaymentsRequest = $updatePaymentsRequest;
      $this->clientContext = $clientContext;
    }

    /**
     * @return UpdatePayments_Request
     */
    public function getUpdatePaymentsRequest()
    {
      return $this->updatePaymentsRequest;
    }

    /**
     * @param UpdatePayments_Request $updatePaymentsRequest
     * @return UpdatePayments
     */
    public function setUpdatePaymentsRequest($updatePaymentsRequest)
    {
      $this->updatePaymentsRequest = $updatePaymentsRequest;
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
     * @return UpdatePayments
     */
    public function setClientContext($clientContext)
    {
      $this->clientContext = $clientContext;
      return $this;
    }

}
