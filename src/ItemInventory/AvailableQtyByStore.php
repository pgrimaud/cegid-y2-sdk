<?php

namespace Y2\ItemInventory;

class AvailableQtyByStore
{
    /**
     * @var float $AvailableQty
     */
    protected $AvailableQty = null;

    /**
     * @var string $StoreDescription
     */
    protected $StoreDescription = null;

    /**
     * @var string $StoreId
     */
    protected $StoreId = null;
    
    public function __construct()
    {

    }

    /**
     * @return float
     */
    public function getAvailableQty()
    {
        return $this->AvailableQty;
    }

    /**
     * @param float $AvailableQty
     * @return AvailableQtyByStore
     */
    public function setAvailableQty($AvailableQty)
    {
        $this->AvailableQty = $AvailableQty;
        return $this;
    }

    /**
     * @return string
     */
    public function getStoreDescription()
    {
        return $this->StoreDescription;
    }

    /**
     * @param string $StoreDescription
     * @return AvailableQtyByStore
     */
    public function setStoreDescription($StoreDescription)
    {
        $this->StoreDescription = $StoreDescription;
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
     * @return AvailableQtyByStore
     */
    public function setStoreId($StoreId)
    {
        $this->StoreId = $StoreId;
        return $this;
    }

}
