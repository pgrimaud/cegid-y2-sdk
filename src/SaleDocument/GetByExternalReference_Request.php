<?php

namespace Y2\SaleDocument;

class GetByExternalReference_Request
{

    /**
     * @var string $ExternalReference
     */
    protected $ExternalReference = null;

    /**
     * @var SaleDocumentType $Type
     */
    protected $Type = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getExternalReference()
    {
      return $this->ExternalReference;
    }

    /**
     * @param string $ExternalReference
     * @return GetByExternalReference_Request
     */
    public function setExternalReference($ExternalReference)
    {
      $this->ExternalReference = $ExternalReference;
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
     * @return GetByExternalReference_Request
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
