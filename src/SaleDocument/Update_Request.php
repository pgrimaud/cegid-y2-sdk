<?php

namespace Y2\SaleDocument;

class Update_Request
{

    /**
     * @var Address $DeliveryAddress
     */
    protected $DeliveryAddress = null;

    /**
     * @var Update_Header $Header
     */
    protected $Header = null;

    /**
     * @var SaleDocumentIdentifier $Identifier
     */
    protected $Identifier = null;

    /**
     * @var Address $InvoicingAddress
     */
    protected $InvoicingAddress = null;

    /**
     * @var ArrayOfUpdate_Line $Lines
     */
    protected $Lines = null;

    /**
     * @var ArrayOfUpdate_Payment $Payments
     */
    protected $Payments = null;

    /**
     * @var ArrayOfUpdate_ShippingTax $ShippingTaxes
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
     * @return Update_Request
     */
    public function setDeliveryAddress($DeliveryAddress)
    {
      $this->DeliveryAddress = $DeliveryAddress;
      return $this;
    }

    /**
     * @return Update_Header
     */
    public function getHeader()
    {
      return $this->Header;
    }

    /**
     * @param Update_Header $Header
     * @return Update_Request
     */
    public function setHeader($Header)
    {
      $this->Header = $Header;
      return $this;
    }

    /**
     * @return SaleDocumentIdentifier
     */
    public function getIdentifier()
    {
      return $this->Identifier;
    }

    /**
     * @param SaleDocumentIdentifier $Identifier
     * @return Update_Request
     */
    public function setIdentifier($Identifier)
    {
      $this->Identifier = $Identifier;
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
     * @return Update_Request
     */
    public function setInvoicingAddress($InvoicingAddress)
    {
      $this->InvoicingAddress = $InvoicingAddress;
      return $this;
    }

    /**
     * @return ArrayOfUpdate_Line
     */
    public function getLines()
    {
      return $this->Lines;
    }

    /**
     * @param ArrayOfUpdate_Line $Lines
     * @return Update_Request
     */
    public function setLines($Lines)
    {
      $this->Lines = $Lines;
      return $this;
    }

    /**
     * @return ArrayOfUpdate_Payment
     */
    public function getPayments()
    {
      return $this->Payments;
    }

    /**
     * @param ArrayOfUpdate_Payment $Payments
     * @return Update_Request
     */
    public function setPayments($Payments)
    {
      $this->Payments = $Payments;
      return $this;
    }

    /**
     * @return ArrayOfUpdate_ShippingTax
     */
    public function getShippingTaxes()
    {
      return $this->ShippingTaxes;
    }

    /**
     * @param ArrayOfUpdate_ShippingTax $ShippingTaxes
     * @return Update_Request
     */
    public function setShippingTaxes($ShippingTaxes)
    {
      $this->ShippingTaxes = $ShippingTaxes;
      return $this;
    }

}
