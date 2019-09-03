<?php

namespace Y2\SaleDocument;

class GetByExternalReference_Request
{

    /**
     * @var string $ExternalReference
     */
    protected $ExternalReference = null;

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
     * @return string
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param string $Type
     * @return GetByExternalReference_Request
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
