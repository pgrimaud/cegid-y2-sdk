<?php

namespace Y2\SaleDocument;

class SaleDocumentLineIdentifier
{

    /**
     * @var SaleDocumentIdentifier $DocumentId
     */
    protected $DocumentId = null;

    /**
     * @var int $LineId
     */
    protected $LineId = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SaleDocumentIdentifier
     */
    public function getDocumentId()
    {
      return $this->DocumentId;
    }

    /**
     * @param SaleDocumentIdentifier $DocumentId
     * @return SaleDocumentLineIdentifier
     */
    public function setDocumentId($DocumentId)
    {
      $this->DocumentId = $DocumentId;
      return $this;
    }

    /**
     * @return int
     */
    public function getLineId()
    {
      return $this->LineId;
    }

    /**
     * @param int $LineId
     * @return SaleDocumentLineIdentifier
     */
    public function setLineId($LineId)
    {
      $this->LineId = $LineId;
      return $this;
    }

}
