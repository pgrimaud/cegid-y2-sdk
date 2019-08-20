<?php

namespace Y2\SaleDocument;

class GetHeaderList_Request
{

    /**
     * @var boolean $Active
     */
    protected $Active = null;

    /**
     * @var \DateTime $BeginDate
     */
    protected $BeginDate = null;

    /**
     * @var string $CustomerId
     */
    protected $CustomerId = null;

    /**
     * @var ArrayOfSaleDocumentType $DocumentTypes
     */
    protected $DocumentTypes = null;

    /**
     * @var \DateTime $EndDate
     */
    protected $EndDate = null;

    /**
     * @var Pager $Pager
     */
    protected $Pager = null;

    /**
     * @var ArrayOfstring $StoreIds
     */
    protected $StoreIds = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return boolean
     */
    public function getActive()
    {
      return $this->Active;
    }

    /**
     * @param boolean $Active
     * @return GetHeaderList_Request
     */
    public function setActive($Active)
    {
      $this->Active = $Active;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getBeginDate()
    {
      if ($this->BeginDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->BeginDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $BeginDate
     * @return GetHeaderList_Request
     */
    public function setBeginDate(\DateTime $BeginDate = null)
    {
      if ($BeginDate == null) {
       $this->BeginDate = null;
      } else {
        $this->BeginDate = $BeginDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerId()
    {
      return $this->CustomerId;
    }

    /**
     * @param string $CustomerId
     * @return GetHeaderList_Request
     */
    public function setCustomerId($CustomerId)
    {
      $this->CustomerId = $CustomerId;
      return $this;
    }

    /**
     * @return ArrayOfSaleDocumentType
     */
    public function getDocumentTypes()
    {
      return $this->DocumentTypes;
    }

    /**
     * @param ArrayOfSaleDocumentType $DocumentTypes
     * @return GetHeaderList_Request
     */
    public function setDocumentTypes($DocumentTypes)
    {
      $this->DocumentTypes = $DocumentTypes;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
      if ($this->EndDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->EndDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $EndDate
     * @return GetHeaderList_Request
     */
    public function setEndDate(\DateTime $EndDate = null)
    {
      if ($EndDate == null) {
       $this->EndDate = null;
      } else {
        $this->EndDate = $EndDate->format(\DateTime::ATOM);
      }
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
     * @return GetHeaderList_Request
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
     * @return GetHeaderList_Request
     */
    public function setStoreIds($StoreIds)
    {
      $this->StoreIds = $StoreIds;
      return $this;
    }

}
