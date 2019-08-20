<?php

namespace Y2\SaleDocument;

class GetByExternalReferenceResponse
{

    /**
     * @var GetByExternalReference_Reply $GetByExternalReferenceResult
     */
    protected $GetByExternalReferenceResult = null;

    /**
     * @param GetByExternalReference_Reply $GetByExternalReferenceResult
     */
    public function __construct($GetByExternalReferenceResult)
    {
      $this->GetByExternalReferenceResult = $GetByExternalReferenceResult;
    }

    /**
     * @return GetByExternalReference_Reply
     */
    public function getGetByExternalReferenceResult()
    {
      return $this->GetByExternalReferenceResult;
    }

    /**
     * @param GetByExternalReference_Reply $GetByExternalReferenceResult
     * @return GetByExternalReferenceResponse
     */
    public function setGetByExternalReferenceResult($GetByExternalReferenceResult)
    {
      $this->GetByExternalReferenceResult = $GetByExternalReferenceResult;
      return $this;
    }

}
