<?php

namespace Y2\SaleDocument;

class CustomersReservationCreateResponse
{

    /**
     * @var CustomersReservationCreate_Reply $CustomersReservationCreateResult
     */
    protected $CustomersReservationCreateResult = null;

    /**
     * @param CustomersReservationCreate_Reply $CustomersReservationCreateResult
     */
    public function __construct($CustomersReservationCreateResult)
    {
      $this->CustomersReservationCreateResult = $CustomersReservationCreateResult;
    }

    /**
     * @return CustomersReservationCreate_Reply
     */
    public function getCustomersReservationCreateResult()
    {
      return $this->CustomersReservationCreateResult;
    }

    /**
     * @param CustomersReservationCreate_Reply $CustomersReservationCreateResult
     * @return CustomersReservationCreateResponse
     */
    public function setCustomersReservationCreateResult($CustomersReservationCreateResult)
    {
      $this->CustomersReservationCreateResult = $CustomersReservationCreateResult;
      return $this;
    }

}
