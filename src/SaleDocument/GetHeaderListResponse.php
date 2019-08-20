<?php

namespace Y2\SaleDocument;

class GetHeaderListResponse
{

    /**
     * @var GetHeaderList_Reply $GetHeaderListResult
     */
    protected $GetHeaderListResult = null;

    /**
     * @param GetHeaderList_Reply $GetHeaderListResult
     */
    public function __construct($GetHeaderListResult)
    {
      $this->GetHeaderListResult = $GetHeaderListResult;
    }

    /**
     * @return GetHeaderList_Reply
     */
    public function getGetHeaderListResult()
    {
      return $this->GetHeaderListResult;
    }

    /**
     * @param GetHeaderList_Reply $GetHeaderListResult
     * @return GetHeaderListResponse
     */
    public function setGetHeaderListResult($GetHeaderListResult)
    {
      $this->GetHeaderListResult = $GetHeaderListResult;
      return $this;
    }

}
