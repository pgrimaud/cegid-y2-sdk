<?php

namespace Y2\SaleDocument;

class GetOmniChannelLine
{

    /**
     * @var string $FollowUpStatus
     */
    protected $FollowUpStatus = null;

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
    public function getFollowUpStatus()
    {
      return $this->FollowUpStatus;
    }

    /**
     * @param string $FollowUpStatus
     * @return GetOmniChannelLine
     */
    public function setFollowUpStatus($FollowUpStatus)
    {
      $this->FollowUpStatus = $FollowUpStatus;
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
     * @return GetOmniChannelLine
     */
    public function setWarehouseId($WarehouseId)
    {
      $this->WarehouseId = $WarehouseId;
      return $this;
    }

}
