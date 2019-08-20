<?php

namespace Y2\SaleDocument;

class CreditCard
{

    /**
     * @var string $AuthorizationNumber
     */
    protected $AuthorizationNumber = null;

    /**
     * @var string $TransactionNumber
     */
    protected $TransactionNumber = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getAuthorizationNumber()
    {
      return $this->AuthorizationNumber;
    }

    /**
     * @param string $AuthorizationNumber
     * @return CreditCard
     */
    public function setAuthorizationNumber($AuthorizationNumber)
    {
      $this->AuthorizationNumber = $AuthorizationNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getTransactionNumber()
    {
      return $this->TransactionNumber;
    }

    /**
     * @param string $TransactionNumber
     * @return CreditCard
     */
    public function setTransactionNumber($TransactionNumber)
    {
      $this->TransactionNumber = $TransactionNumber;
      return $this;
    }

}
