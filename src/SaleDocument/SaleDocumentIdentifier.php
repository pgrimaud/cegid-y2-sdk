<?php

namespace Y2\SaleDocument;

class SaleDocumentIdentifier
{

    /**
     * @var SaleDocumentKey $Key
     */
    protected $Key = null;

    /**
     * @var SaleDocumentReference $Reference
     */
    protected $Reference = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SaleDocumentKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param SaleDocumentKey $Key
     * @return SaleDocumentIdentifier
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
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
     * @return SaleDocumentIdentifier
     */
    public function setReference($Reference)
    {
      $this->Reference = $Reference;
      return $this;
    }

}
