<?php

namespace Y2\SaleDocument;

class UpdatePayments_Request
{

    /**
     * @var SaleDocumentIdentifier $Identifier
     */
    protected $Identifier = null;

    /**
     * @var ArrayOfUpdate_Payment $Payments
     */
    protected $Payments = null;

    
    public function __construct()
    {
    
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
     * @return UpdatePayments_Request
     */
    public function setIdentifier($Identifier)
    {
      $this->Identifier = $Identifier;
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
     * @return UpdatePayments_Request
     */
    public function setPayments($Payments)
    {
      $this->Payments = $Payments;
      return $this;
    }

}
