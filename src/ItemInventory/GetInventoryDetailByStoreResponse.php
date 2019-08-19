<?php

namespace Y2\ItemInventory;

class GetInventoryDetailByStoreResponse
{
    /**
     * @var ArrayOfAvailableQtyByStore $GetInventoryDetailByStoreResult
     */
    protected $GetInventoryDetailByStoreResult = null;

    /**
     * @param ArrayOfAvailableQtyByStore $GetInventoryDetailByStoreResult
     */
    public function __construct($GetInventoryDetailByStoreResult)
    {
        $this->GetInventoryDetailByStoreResult = $GetInventoryDetailByStoreResult;
    }

    /**
     * @return ArrayOfAvailableQtyByStore
     */
    public function getGetInventoryDetailByStoreResult()
    {
        return $this->GetInventoryDetailByStoreResult;
    }

    /**
     * @param ArrayOfAvailableQtyByStore $GetInventoryDetailByStoreResult
     * @return GetInventoryDetailByStoreResponse
     */
    public function setGetInventoryDetailByStoreResult($GetInventoryDetailByStoreResult)
    {
        $this->GetInventoryDetailByStoreResult = $GetInventoryDetailByStoreResult;
        return $this;
    }

}
