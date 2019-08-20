<?php

namespace Y2\SaleDocument;

class CustomersReservationCreate
{

    /**
     * @var CustomersReservationCreate_Request $customersReservationCreateRequest
     */
    protected $customersReservationCreateRequest = null;

    /**
     * @var RetailContext $clientContext
     */
    protected $clientContext = null;

    /**
     * @param CustomersReservationCreate_Request $customersReservationCreateRequest
     * @param RetailContext $clientContext
     */
    public function __construct($customersReservationCreateRequest, $clientContext)
    {
      $this->customersReservationCreateRequest = $customersReservationCreateRequest;
      $this->clientContext = $clientContext;
    }

    /**
     * @return CustomersReservationCreate_Request
     */
    public function getCustomersReservationCreateRequest()
    {
      return $this->customersReservationCreateRequest;
    }

    /**
     * @param CustomersReservationCreate_Request $customersReservationCreateRequest
     * @return CustomersReservationCreate
     */
    public function setCustomersReservationCreateRequest($customersReservationCreateRequest)
    {
      $this->customersReservationCreateRequest = $customersReservationCreateRequest;
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
     * @return CustomersReservationCreate
     */
    public function setClientContext($clientContext)
    {
      $this->clientContext = $clientContext;
      return $this;
    }

}
