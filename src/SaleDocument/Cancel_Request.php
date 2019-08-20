<?php

namespace Y2\SaleDocument;

class Cancel_Request
{

    /**
     * @var SaleDocumentIdentifier $Identifier
     */
    protected $Identifier = null;

    /**
     * @var string $ReasonId
     */
    protected $ReasonId = null;

    
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
     * @return Cancel_Request
     */
    public function setIdentifier($Identifier)
    {
      $this->Identifier = $Identifier;
      return $this;
    }

    /**
     * @return string
     */
    public function getReasonId()
    {
      return $this->ReasonId;
    }

    /**
     * @param string $ReasonId
     * @return Cancel_Request
     */
    public function setReasonId($ReasonId)
    {
      $this->ReasonId = $ReasonId;
      return $this;
    }

}
