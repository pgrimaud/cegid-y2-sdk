<?php

namespace Y2\SaleDocument;

class Get_Reply
{

    /**
     * @var Address $DeliveryAddress
     */
    protected $DeliveryAddress = null;

    /**
     * @var Get_Header $Header
     */
    protected $Header = null;

    /**
     * @var Address $InvoicingAddress
     */
    protected $InvoicingAddress = null;

    /**
     * @var ArrayOfGet_Line $Lines
     */
    protected $Lines = null;

    /**
     * @var ArrayOfGet_Payment $Payments
     */
    protected $Payments = null;

    /**
     * @var ArrayOfGet_ShippingTax $ShippingTaxes
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
     * @return Get_Reply
     */
    public function setDeliveryAddress($DeliveryAddress)
    {
      $this->DeliveryAddress = $DeliveryAddress;
      return $this;
    }

    /**
     * @return Get_Header
     */
    public function getHeader()
    {
      return $this->Header;
    }

    /**
     * @param Get_Header $Header
     * @return Get_Reply
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
     * @return Get_Reply
     */
    public function setInvoicingAddress($InvoicingAddress)
    {
      $this->InvoicingAddress = $InvoicingAddress;
      return $this;
    }

    /**
     * @return ArrayOfGet_Line
     */
    public function getLines()
    {
      return $this->Lines;
    }

    /**
     * @param ArrayOfGet_Line $Lines
     * @return Get_Reply
     */
    public function setLines($Lines)
    {
      $this->Lines = $Lines;
      return $this;
    }

    /**
     * @return ArrayOfGet_Payment
     */
    public function getPayments()
    {
      return $this->Payments;
    }

    /**
     * @param ArrayOfGet_Payment $Payments
     * @return Get_Reply
     */
    public function setPayments($Payments)
    {
      $this->Payments = $Payments;
      return $this;
    }

    /**
     * @return ArrayOfGet_ShippingTax
     */
    public function getShippingTaxes()
    {
      return $this->ShippingTaxes;
    }

    /**
     * @param ArrayOfGet_ShippingTax $ShippingTaxes
     * @return Get_Reply
     */
    public function setShippingTaxes($ShippingTaxes)
    {
      $this->ShippingTaxes = $ShippingTaxes;
      return $this;
    }

}
