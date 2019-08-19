<?php

namespace Y2\ItemInventory;

class GetListItemInventoryDetailByStoreResponse
{
    /**
     * @var GetListItemInventoryDetailByStore_Reply $GetListItemInventoryDetailByStoreResult
     */
    protected $GetListItemInventoryDetailByStoreResult = null;

    /**
     * @param GetListItemInventoryDetailByStore_Reply $GetListItemInventoryDetailByStoreResult
     */
    public function __construct($GetListItemInventoryDetailByStoreResult)
    {
        $this->GetListItemInventoryDetailByStoreResult = $GetListItemInventoryDetailByStoreResult;
    }

    /**
     * @return GetListItemInventoryDetailByStore_Reply
     */
    public function getGetListItemInventoryDetailByStoreResult()
    {
        return $this->GetListItemInventoryDetailByStoreResult;
    }

    /**
     * @param GetListItemInventoryDetailByStore_Reply $GetListItemInventoryDetailByStoreResult
     * @return GetListItemInventoryDetailByStoreResponse
     */
    public function setGetListItemInventoryDetailByStoreResult($GetListItemInventoryDetailByStoreResult)
    {
        $this->GetListItemInventoryDetailByStoreResult = $GetListItemInventoryDetailByStoreResult;
        return $this;
    }

}
