<?php

namespace Y2\ItemInventory;

class AvailableQtyReturn
{
    /**
     * @var float $AvailableQty
     */
    protected $AvailableQty = null;

    /**
     * @var QueryExecutionStatus $QueryStatus
     */
    protected $QueryStatus = null;

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
     * @return AvailableQtyReturn
     */
    public function setAvailableQty($AvailableQty)
    {
        $this->AvailableQty = $AvailableQty;
        return $this;
    }

    /**
     * @return QueryExecutionStatus
     */
    public function getQueryStatus()
    {
        return $this->QueryStatus;
    }

    /**
     * @param QueryExecutionStatus $QueryStatus
     * @return AvailableQtyReturn
     */
    public function setQueryStatus($QueryStatus)
    {
        $this->QueryStatus = $QueryStatus;
        return $this;
    }

}
