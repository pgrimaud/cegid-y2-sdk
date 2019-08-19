<?php

namespace Y2\ItemInventory;

class StoreAvailableQty
{
    /**
     * @var float $AvailableQuantity
     */
    protected $AvailableQuantity = null;

    /**
     * @var ArrayOfAvailableSkuQty $AvailableSkusQty
     */
    protected $AvailableSkusQty = null;

    /**
     * @var string $StoreId
     */
    protected $StoreId = null;

    /**
     * @var string $StoreName
     */
    protected $StoreName = null;

    public function __construct()
    {

    }

    /**
     * @return float
     */
    public function getAvailableQuantity()
    {
        return $this->AvailableQuantity;
    }

    /**
     * @param float $AvailableQuantity
     * @return StoreAvailableQty
     */
    public function setAvailableQuantity($AvailableQuantity)
    {
        $this->AvailableQuantity = $AvailableQuantity;
        return $this;
    }

    /**
     * @return ArrayOfAvailableSkuQty
     */
    public function getAvailableSkusQty()
    {
        return $this->AvailableSkusQty;
    }

    /**
     * @param ArrayOfAvailableSkuQty $AvailableSkusQty
     * @return StoreAvailableQty
     */
    public function setAvailableSkusQty($AvailableSkusQty)
    {
        $this->AvailableSkusQty = $AvailableSkusQty;
        return $this;
    }

    /**
     * @return string
     */
    public function getStoreId()
    {
        return $this->StoreId;
    }

    /**
     * @param string $StoreId
     * @return StoreAvailableQty
     */
    public function setStoreId($StoreId)
    {
        $this->StoreId = $StoreId;
        return $this;
    }

    /**
     * @return string
     */
    public function getStoreName()
    {
        return $this->StoreName;
    }

    /**
     * @param string $StoreName
     * @return StoreAvailableQty
     */
    public function setStoreName($StoreName)
    {
        $this->StoreName = $StoreName;
        return $this;
    }

}
