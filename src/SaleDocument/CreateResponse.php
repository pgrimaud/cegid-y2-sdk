<?php

namespace Y2\SaleDocument;

class CreateResponse
{

    /**
     * @var Create_Reply $CreateResult
     */
    protected $CreateResult = null;

    /**
     * @param Create_Reply $CreateResult
     */
    public function __construct($CreateResult)
    {
      $this->CreateResult = $CreateResult;
    }

    /**
     * @return Create_Reply
     */
    public function getCreateResult()
    {
      return $this->CreateResult;
    }

    /**
     * @param Create_Reply $CreateResult
     * @return CreateResponse
     */
    public function setCreateResult($CreateResult)
    {
      $this->CreateResult = $CreateResult;
      return $this;
    }

}
