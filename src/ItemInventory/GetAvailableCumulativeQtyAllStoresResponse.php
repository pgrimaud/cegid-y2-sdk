<?php

namespace Y2\ItemInventory;

class GetAvailableCumulativeQtyAllStoresResponse
{
    /**
     * @var AvailableQtyReturn $GetAvailableCumulativeQtyAllStoresResult
     */
    protected $GetAvailableCumulativeQtyAllStoresResult = null;

    /**
     * @param AvailableQtyReturn $GetAvailableCumulativeQtyAllStoresResult
     */
    public function __construct($GetAvailableCumulativeQtyAllStoresResult)
    {
        $this->GetAvailableCumulativeQtyAllStoresResult = $GetAvailableCumulativeQtyAllStoresResult;
    }

    /**
     * @return AvailableQtyReturn
     */
    public function getGetAvailableCumulativeQtyAllStoresResult()
    {
        return $this->GetAvailableCumulativeQtyAllStoresResult;
    }

    /**
     * @param AvailableQtyReturn $GetAvailableCumulativeQtyAllStoresResult
     * @return GetAvailableCumulativeQtyAllStoresResponse
     */
    public function setGetAvailableCumulativeQtyAllStoresResult($GetAvailableCumulativeQtyAllStoresResult)
    {
        $this->GetAvailableCumulativeQtyAllStoresResult = $GetAvailableCumulativeQtyAllStoresResult;
        return $this;
    }

}
