<?php

namespace Y2\SaleDocument;

class Create_Tax
{

    /**
     * @var float $Amount
     */
    protected $Amount = null;

    /**
     * @var string $FamilyId
     */
    protected $FamilyId = null;

    
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
     * @return Create_Tax
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return string
     */
    public function getFamilyId()
    {
      return $this->FamilyId;
    }

    /**
     * @param string $FamilyId
     * @return Create_Tax
     */
    public function setFamilyId($FamilyId)
    {
      $this->FamilyId = $FamilyId;
      return $this;
    }

}
