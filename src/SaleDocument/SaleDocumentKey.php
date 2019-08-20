<?php

namespace Y2\SaleDocument;

class SaleDocumentKey
{

    /**
     * @var int $Number
     */
    protected $Number = null;

    /**
     * @var string $Stump
     */
    protected $Stump = null;

    /**
     * @var SaleDocumentType $Type
     */
    protected $Type = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param int $Number
     * @return SaleDocumentKey
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

    /**
     * @return string
     */
    public function getStump()
    {
      return $this->Stump;
    }

    /**
     * @param string $Stump
     * @return SaleDocumentKey
     */
    public function setStump($Stump)
    {
      $this->Stump = $Stump;
      return $this;
    }

    /**
     * @return SaleDocumentType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param SaleDocumentType $Type
     * @return SaleDocumentKey
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
