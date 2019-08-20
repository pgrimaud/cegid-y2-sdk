<?php

namespace Y2\SaleDocument;

class GetHeaderList_Reply
{

    /**
     * @var ArrayOfGet_Header $Headers
     */
    protected $Headers = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfGet_Header
     */
    public function getHeaders()
    {
      return $this->Headers;
    }

    /**
     * @param ArrayOfGet_Header $Headers
     * @return GetHeaderList_Reply
     */
    public function setHeaders($Headers)
    {
      $this->Headers = $Headers;
      return $this;
    }

}
