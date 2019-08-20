<?php

namespace Y2\SaleDocument;

class GetByReferenceResponse
{

    /**
     * @var Get_Reply $GetByReferenceResult
     */
    protected $GetByReferenceResult = null;

    /**
     * @param Get_Reply $GetByReferenceResult
     */
    public function __construct($GetByReferenceResult)
    {
      $this->GetByReferenceResult = $GetByReferenceResult;
    }

    /**
     * @return Get_Reply
     */
    public function getGetByReferenceResult()
    {
      return $this->GetByReferenceResult;
    }

    /**
     * @param Get_Reply $GetByReferenceResult
     * @return GetByReferenceResponse
     */
    public function setGetByReferenceResult($GetByReferenceResult)
    {
      $this->GetByReferenceResult = $GetByReferenceResult;
      return $this;
    }

}
