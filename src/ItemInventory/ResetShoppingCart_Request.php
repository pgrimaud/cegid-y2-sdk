<?php

namespace Y2\ItemInventory;

class ResetShoppingCart_Request
{
    /**
     * @var ItemIdentifier $ItemIdentifier
     */
    protected $ItemIdentifier = null;

    /**
     * @var string $WarehouseId
     */
    protected $WarehouseId = null;

    public function __construct()
    {

    }

    /**
     * @return ItemIdentifier
     */
    public function getItemIdentifier()
    {
        return $this->ItemIdentifier;
    }

    /**
     * @param ItemIdentifier $ItemIdentifier
     * @return ResetShoppingCart_Request
     */
    public function setItemIdentifier($ItemIdentifier)
    {
        $this->ItemIdentifier = $ItemIdentifier;
        return $this;
    }

    /**
     * @return string
     */
    public function getWarehouseId()
    {
        return $this->WarehouseId;
    }

    /**
     * @param string $WarehouseId
     * @return ResetShoppingCart_Request
     */
    public function setWarehouseId($WarehouseId)
    {
        $this->WarehouseId = $WarehouseId;
        return $this;
    }

}
