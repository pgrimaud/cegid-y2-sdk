<?php

namespace Y2\SaleDocument;

class CustomersReservationCreate_Request
{

    /**
     * @var CustomersReservationCreate_Header $Header
     */
    protected $Header = null;

    /**
     * @var ArrayOfCustomersReservationCreate_Line $Lines
     */
    protected $Lines = null;

    /**
     * @var ArrayOfCreate_Payment $Payments
     */
    protected $Payments = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CustomersReservationCreate_Header
     */
    public function getHeader()
    {
      return $this->Header;
    }

    /**
     * @param CustomersReservationCreate_Header $Header
     * @return CustomersReservationCreate_Request
     */
    public function setHeader($Header)
    {
      $this->Header = $Header;
      return $this;
    }

    /**
     * @return ArrayOfCustomersReservationCreate_Line
     */
    public function getLines()
    {
      return $this->Lines;
    }

    /**
     * @param ArrayOfCustomersReservationCreate_Line $Lines
     * @return CustomersReservationCreate_Request
     */
    public function setLines($Lines)
    {
      $this->Lines = $Lines;
      return $this;
    }

    /**
     * @return ArrayOfCreate_Payment
     */
    public function getPayments()
    {
      return $this->Payments;
    }

    /**
     * @param ArrayOfCreate_Payment $Payments
     * @return CustomersReservationCreate_Request
     */
    public function setPayments($Payments)
    {
      $this->Payments = $Payments;
      return $this;
    }

}
