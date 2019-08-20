<?php

namespace Y2\SaleDocument;

class OmniChannelLine
{

    /**
     * @var string $WarehouseId
     */
    protected $WarehouseId = null;

    
    public function __construct()
    {
    
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
     * @return OmniChannelLine
     */
    public function setWarehouseId($WarehouseId)
    {
      $this->WarehouseId = $WarehouseId;
      return $this;
    }

}
