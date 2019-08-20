<?php

namespace Y2\SaleDocument;

class GetByKeyResponse
{

    /**
     * @var Get_Reply $GetByKeyResult
     */
    protected $GetByKeyResult = null;

    /**
     * @param Get_Reply $GetByKeyResult
     */
    public function __construct($GetByKeyResult)
    {
      $this->GetByKeyResult = $GetByKeyResult;
    }

    /**
     * @return Get_Reply
     */
    public function getGetByKeyResult()
    {
      return $this->GetByKeyResult;
    }

    /**
     * @param Get_Reply $GetByKeyResult
     * @return GetByKeyResponse
     */
    public function setGetByKeyResult($GetByKeyResult)
    {
      $this->GetByKeyResult = $GetByKeyResult;
      return $this;
    }

}
