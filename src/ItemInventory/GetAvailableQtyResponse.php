<?php

namespace Y2\ItemInventory;

class GetAvailableQtyResponse
{
    /**
     * @var AvailableQtyReturn $GetAvailableQtyResult
     */
    protected $GetAvailableQtyResult = null;

    /**
     * @param AvailableQtyReturn $GetAvailableQtyResult
     */
    public function __construct($GetAvailableQtyResult)
    {
        $this->GetAvailableQtyResult = $GetAvailableQtyResult;
    }

    /**
     * @return AvailableQtyReturn
     */
    public function getGetAvailableQtyResult()
    {
        return $this->GetAvailableQtyResult;
    }

    /**
     * @param AvailableQtyReturn $GetAvailableQtyResult
     * @return GetAvailableQtyResponse
     */
    public function setGetAvailableQtyResult($GetAvailableQtyResult)
    {
        $this->GetAvailableQtyResult = $GetAvailableQtyResult;
        return $this;
    }

}
