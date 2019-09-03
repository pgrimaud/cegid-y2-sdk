<?php

namespace Y2\SaleDocument;

class SaleDocumentReference
{

    /**
     * @var string $CustomerId
     */
    protected $CustomerId = null;

    /**
     * @var string $InternalReference
     */
    protected $InternalReference = null;

    /**
     * @var string $Type
     */
    protected $Type = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCustomerId()
    {
      return $this->CustomerId;
    }

    /**
     * @param string $CustomerId
     * @return SaleDocumentReference
     */
    public function setCustomerId($CustomerId)
    {
      $this->CustomerId = $CustomerId;
      return $this;
    }

    /**
     * @return string
     */
    public function getInternalReference()
    {
      return $this->InternalReference;
    }

    /**
     * @param string $InternalReference
     * @return SaleDocumentReference
     */
    public function setInternalReference($InternalReference)
    {
      $this->InternalReference = $InternalReference;
      return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param string $Type
     * @return SaleDocumentReference
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
