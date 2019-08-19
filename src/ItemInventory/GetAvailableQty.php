<?php

namespace Y2\ItemInventory;

class GetAvailableQty
{
    /**
     * @var string $itemId
     */
    protected $itemId = null;

    /**
     * @var ItemIdentifier $itemIdentifier
     */
    protected $itemIdentifier = null;

    /**
     * @var string $storeId
     */
    protected $storeId = null;

    /**
     * @var string $warehouseId
     */
    protected $warehouseId = null;

    /**
     * @var RetailContext $clientContext
     */
    protected $clientContext = null;

    /**
     * @param string         $itemId
     * @param ItemIdentifier $itemIdentifier
     * @param string         $storeId
     * @param string         $warehouseId
     * @param RetailContext  $clientContext
     */
    public function __construct($itemIdentifier, $itemId = null, $storeId = null, $warehouseId = null, $clientContext = null)
    {
        $this->itemIdentifier = $itemIdentifier;
        $this->itemId         = $itemId;
        $this->storeId        = $storeId;
        $this->warehouseId    = $warehouseId;
        $this->clientContext  = $clientContext;
    }

    /**
     * @return string
     */
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * @param string $itemId
     *
     * @return GetAvailableQty
     */
    public function setItemId($itemId)
    {
        $this->itemId = $itemId;
        return $this;
    }

    /**
     * @return ItemIdentifier
     */
    public function getItemIdentifier()
    {
        return $this->itemIdentifier;
    }

    /**
     * @param ItemIdentifier $itemIdentifier
     *
     * @return GetAvailableQty
     */
    public function setItemIdentifier($itemIdentifier)
    {
        $this->itemIdentifier = $itemIdentifier;
        return $this;
    }

    /**
     * @return string
     */
    public function getStoreId()
    {
        return $this->storeId;
    }

    /**
     * @param string $storeId
     *
     * @return GetAvailableQty
     */
    public function setStoreId($storeId)
    {
        $this->storeId = $storeId;
        return $this;
    }

    /**
     * @return string
     */
    public function getWarehouseId()
    {
        return $this->warehouseId;
    }

    /**
     * @param string $warehouseId
     *
     * @return GetAvailableQty
     */
    public function setWarehouseId($warehouseId)
    {
        $this->warehouseId = $warehouseId;
        return $this;
    }

    /**
     * @return RetailContext
     */
    public function getClientContext()
    {
        return $this->clientContext;
    }

    /**
     * @param RetailContext $clientContext
     *
     * @return GetAvailableQty
     */
    public function setClientContext($clientContext)
    {
        $this->clientContext = $clientContext;
        return $this;
    }

}
