<?php

namespace Y2\SaleDocument;

class GetByKey_Request
{

    /**
     * @var SaleDocumentKey $Key
     */
    protected $Key = null;

    
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
     * @return GetByKey_Request
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
