<?php

namespace Y2\ItemInventory;

class Pager
{
    /**
     * @var int $PageIndex
     */
    protected $PageIndex = null;

    /**
     * @var int $PageSize
     */
    protected $PageSize = null;

    public function __construct()
    {

    }

    /**
     * @return int
     */
    public function getPageIndex()
    {
        return $this->PageIndex;
    }

    /**
     * @param int $PageIndex
     * @return Pager
     */
    public function setPageIndex($PageIndex)
    {
        $this->PageIndex = $PageIndex;
        return $this;
    }

    /**
     * @return int
     */
    public function getPageSize()
    {
        return $this->PageSize;
    }

    /**
     * @param int $PageSize
     * @return Pager
     */
    public function setPageSize($PageSize)
    {
        $this->PageSize = $PageSize;
        return $this;
    }

}
