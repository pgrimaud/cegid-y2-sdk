<?php

namespace Y2\ItemInventory;

class GetInventoryDetailByStore
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
     * @var RetailContext $clientContext
     */
    protected $clientContext = null;

    /**
     * @param string $itemId
     * @param ItemIdentifier $itemIdentifier
     * @param RetailContext $clientContext
     */
    public function __construct($itemId, $itemIdentifier, $clientContext)
    {
        $this->itemId         = $itemId;
        $this->itemIdentifier = $itemIdentifier;
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
     * @return GetInventoryDetailByStore
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
     * @return GetInventoryDetailByStore
     */
    public function setItemIdentifier($itemIdentifier)
    {
        $this->itemIdentifier = $itemIdentifier;
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
     * @return GetInventoryDetailByStore
     */
    public function setClientContext($clientContext)
    {
        $this->clientContext = $clientContext;
        return $this;
    }

}
