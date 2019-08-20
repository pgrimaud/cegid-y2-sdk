<?php

namespace Y2\SaleDocument;

class Create_ShippingTax
{

    /**
     * @var float $Amount
     */
    protected $Amount = null;

    /**
     * @var string $Id
     */
    protected $Id = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return float
     */
    public function getAmount()
    {
      return $this->Amount;
    }

    /**
     * @param float $Amount
     * @return Create_ShippingTax
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return string
     */
    public function getId()
    {
      return $this->Id;
    }

    /**
     * @param string $Id
     * @return Create_ShippingTax
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

}
