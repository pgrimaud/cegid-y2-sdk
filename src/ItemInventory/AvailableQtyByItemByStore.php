<?php

namespace Y2\ItemInventory;

class AvailableQtyByItemByStore
{
    /**
     * @var string $ItemCode
     */
    protected $ItemCode = null;

    /**
     * @var ArrayOfStoreAvailableQty $StoresAvailableQty
     */
    protected $StoresAvailableQty = null;

    public function __construct()
    {

    }

    /**
     * @return string
     */
    public function getItemCode()
    {
        return $this->ItemCode;
    }

    /**
     * @param string $ItemCode
     * @return AvailableQtyByItemByStore
     */
    public function setItemCode($ItemCode)
    {
        $this->ItemCode = $ItemCode;
        return $this;
    }

    /**
     * @return ArrayOfStoreAvailableQty
     */
    public function getStoresAvailableQty()
    {
        return $this->StoresAvailableQty;
    }

    /**
     * @param ArrayOfStoreAvailableQty $StoresAvailableQty
     * @return AvailableQtyByItemByStore
     */
    public function setStoresAvailableQty($StoresAvailableQty)
    {
        $this->StoresAvailableQty = $StoresAvailableQty;
        return $this;
    }

}
