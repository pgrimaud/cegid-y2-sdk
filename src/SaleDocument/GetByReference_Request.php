<?php

namespace Y2\SaleDocument;

class GetByReference_Request
{

    /**
     * @var SaleDocumentReference $Reference
     */
    protected $Reference = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SaleDocumentReference
     */
    public function getReference()
    {
      return $this->Reference;
    }

    /**
     * @param SaleDocumentReference $Reference
     * @return GetByReference_Request
     */
    public function setReference($Reference)
    {
      $this->Reference = $Reference;
      return $this;
    }

}
