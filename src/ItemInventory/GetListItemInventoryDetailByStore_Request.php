<?php

namespace Y2\ItemInventory;

class GetListItemInventoryDetailByStore_Request
{
    /**
     * @var boolean $AllAvailableWarehouse
     */
    protected $AllAvailableWarehouse = null;

    /**
     * @var boolean $DetailSku
     */
    protected $DetailSku = null;

    /**
     * @var ArrayOfItemIdentifier $ItemIdentifiers
     */
    protected $ItemIdentifiers = null;

    /**
     * @var boolean $OnlyAvailableStock
     */
    protected $OnlyAvailableStock = null;

    /**
     * @var Pager $Pager
     */
    protected $Pager = null;

    /**
     * @var ArrayOfstring $StoreIds
     */
    protected $StoreIds = null;

    /**
     * @var boolean $WithStoreName
     */
    protected $WithStoreName = null;

    public function __construct()
    {

    }

    /**
     * @return boolean
     */
    public function getAllAvailableWarehouse()
    {
        return $this->AllAvailableWarehouse;
    }

    /**
     * @param boolean $AllAvailableWarehouse
     * @return GetListItemInventoryDetailByStore_Request
     */
    public function setAllAvailableWarehouse($AllAvailableWarehouse)
    {
        $this->AllAvailableWarehouse = $AllAvailableWarehouse;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getDetailSku()
    {
        return $this->DetailSku;
    }

    /**
     * @param boolean $DetailSku
     * @return GetListItemInventoryDetailByStore_Request
     */
    public function setDetailSku($DetailSku)
    {
        $this->DetailSku = $DetailSku;
        return $this;
    }

    /**
     * @return ArrayOfItemIdentifier
     */
    public function getItemIdentifiers()
    {
        return $this->ItemIdentifiers;
    }

    /**
     * @param ArrayOfItemIdentifier $ItemIdentifiers
     * @return GetListItemInventoryDetailByStore_Request
     */
    public function setItemIdentifiers($ItemIdentifiers)
    {
        $this->ItemIdentifiers = $ItemIdentifiers;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getOnlyAvailableStock()
    {
        return $this->OnlyAvailableStock;
    }

    /**
     * @param boolean $OnlyAvailableStock
     * @return GetListItemInventoryDetailByStore_Request
     */
    public function setOnlyAvailableStock($OnlyAvailableStock)
    {
        $this->OnlyAvailableStock = $OnlyAvailableStock;
        return $this;
    }

    /**
     * @return Pager
     */
    public function getPager()
    {
        return $this->Pager;
    }

    /**
     * @param Pager $Pager
     * @return GetListItemInventoryDetailByStore_Request
     */
    public function setPager($Pager)
    {
        $this->Pager = $Pager;
        return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getStoreIds()
    {
        return $this->StoreIds;
    }

    /**
     * @param ArrayOfstring $StoreIds
     * @return GetListItemInventoryDetailByStore_Request
     */
    public function setStoreIds($StoreIds)
    {
        $this->StoreIds = $StoreIds;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getWithStoreName()
    {
        return $this->WithStoreName;
    }

    /**
     * @param boolean $WithStoreName
     * @return GetListItemInventoryDetailByStore_Request
     */
    public function setWithStoreName($WithStoreName)
    {
        $this->WithStoreName = $WithStoreName;
        return $this;
    }

}
