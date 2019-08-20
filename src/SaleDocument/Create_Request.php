<?php

namespace Y2\SaleDocument;

class Create_Request
{

    /**
     * @var Address $DeliveryAddress
     */
    protected $DeliveryAddress = null;

    /**
     * @var Create_Header $Header
     */
    protected $Header = null;

    /**
     * @var Address $InvoicingAddress
     */
    protected $InvoicingAddress = null;

    /**
     * @var ArrayOfCreate_Line $Lines
     */
    protected $Lines = null;

    /**
     * @var ArrayOfCreate_Payment $Payments
     */
    protected $Payments = null;

    /**
     * @var ArrayOfCreate_ShippingTax $ShippingTaxes
     */
    protected $ShippingTaxes = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Address
     */
    public function getDeliveryAddress()
    {
      return $this->DeliveryAddress;
    }

    /**
     * @param Address $DeliveryAddress
     * @return Create_Request
     */
    public function setDeliveryAddress($DeliveryAddress)
    {
      $this->DeliveryAddress = $DeliveryAddress;
      return $this;
    }

    /**
     * @return Create_Header
     */
    public function getHeader()
    {
      return $this->Header;
    }

    /**
     * @param Create_Header $Header
     * @return Create_Request
     */
    public function setHeader($Header)
    {
      $this->Header = $Header;
      return $this;
    }

    /**
     * @return Address
     */
    public function getInvoicingAddress()
    {
      return $this->InvoicingAddress;
    }

    /**
     * @param Address $InvoicingAddress
     * @return Create_Request
     */
    public function setInvoicingAddress($InvoicingAddress)
    {
      $this->InvoicingAddress = $InvoicingAddress;
      return $this;
    }

    /**
     * @return ArrayOfCreate_Line
     */
    public function getLines()
    {
      return $this->Lines;
    }

    /**
     * @param ArrayOfCreate_Line $Lines
     * @return Create_Request
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
     * @return Create_Request
     */
    public function setPayments($Payments)
    {
      $this->Payments = $Payments;
      return $this;
    }

    /**
     * @return ArrayOfCreate_ShippingTax
     */
    public function getShippingTaxes()
    {
      return $this->ShippingTaxes;
    }

    /**
     * @param ArrayOfCreate_ShippingTax $ShippingTaxes
     * @return Create_Request
     */
    public function setShippingTaxes($ShippingTaxes)
    {
      $this->ShippingTaxes = $ShippingTaxes;
      return $this;
    }

}
