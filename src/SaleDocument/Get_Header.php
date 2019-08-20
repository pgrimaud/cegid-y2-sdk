<?php

namespace Y2\SaleDocument;

class Get_Header
{

    /**
     * @var boolean $Active
     */
    protected $Active = null;

    /**
     * @var string $Comment
     */
    protected $Comment = null;

    /**
     * @var string $CurrencyId
     */
    protected $CurrencyId = null;

    /**
     * @var string $CustomerId
     */
    protected $CustomerId = null;

    /**
     * @var \DateTime $Date
     */
    protected $Date = null;

    /**
     * @var string $InternalReference
     */
    protected $InternalReference = null;

    /**
     * @var SaleDocumentKey $Key
     */
    protected $Key = null;

    /**
     * @var OmniChannel $OmniChannel
     */
    protected $OmniChannel = null;

    /**
     * @var DocumentOrigin $Origin
     */
    protected $Origin = null;

    /**
     * @var string $SalesPersonId
     */
    protected $SalesPersonId = null;

    /**
     * @var DocumentStatus $Status
     */
    protected $Status = null;

    /**
     * @var string $StoreId
     */
    protected $StoreId = null;

    /**
     * @var float $TaxExcludedTotalAmount
     */
    protected $TaxExcludedTotalAmount = null;

    /**
     * @var float $TaxIncludedTotalAmount
     */
    protected $TaxIncludedTotalAmount = null;

    /**
     * @var float $TotalQuantity
     */
    protected $TotalQuantity = null;

    /**
     * @var ArrayOfUserDefinedDate $UserDefinedDates
     */
    protected $UserDefinedDates = null;

    /**
     * @var ArrayOfUserDefinedTable $UserDefinedTables
     */
    protected $UserDefinedTables = null;

    /**
     * @var ArrayOfUserField $UserFields
     */
    protected $UserFields = null;

    /**
     * @var string $WarehouseId
     */
    protected $WarehouseId = null;

    
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
     * @return Get_Header
     */
    public function setActive($Active)
    {
      $this->Active = $Active;
      return $this;
    }

    /**
     * @return string
     */
    public function getComment()
    {
      return $this->Comment;
    }

    /**
     * @param string $Comment
     * @return Get_Header
     */
    public function setComment($Comment)
    {
      $this->Comment = $Comment;
      return $this;
    }

    /**
     * @return string
     */
    public function getCurrencyId()
    {
      return $this->CurrencyId;
    }

    /**
     * @param string $CurrencyId
     * @return Get_Header
     */
    public function setCurrencyId($CurrencyId)
    {
      $this->CurrencyId = $CurrencyId;
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
     * @return Get_Header
     */
    public function setCustomerId($CustomerId)
    {
      $this->CustomerId = $CustomerId;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
      if ($this->Date == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Date);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Date
     * @return Get_Header
     */
    public function setDate(\DateTime $Date = null)
    {
      if ($Date == null) {
       $this->Date = null;
      } else {
        $this->Date = $Date->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getInternalReference()
    {
      return $this->InternalReference;
    }

    /**
     * @param string $InternalReference
     * @return Get_Header
     */
    public function setInternalReference($InternalReference)
    {
      $this->InternalReference = $InternalReference;
      return $this;
    }

    /**
     * @return SaleDocumentKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param SaleDocumentKey $Key
     * @return Get_Header
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return OmniChannel
     */
    public function getOmniChannel()
    {
      return $this->OmniChannel;
    }

    /**
     * @param OmniChannel $OmniChannel
     * @return Get_Header
     */
    public function setOmniChannel($OmniChannel)
    {
      $this->OmniChannel = $OmniChannel;
      return $this;
    }

    /**
     * @return DocumentOrigin
     */
    public function getOrigin()
    {
      return $this->Origin;
    }

    /**
     * @param DocumentOrigin $Origin
     * @return Get_Header
     */
    public function setOrigin($Origin)
    {
      $this->Origin = $Origin;
      return $this;
    }

    /**
     * @return string
     */
    public function getSalesPersonId()
    {
      return $this->SalesPersonId;
    }

    /**
     * @param string $SalesPersonId
     * @return Get_Header
     */
    public function setSalesPersonId($SalesPersonId)
    {
      $this->SalesPersonId = $SalesPersonId;
      return $this;
    }

    /**
     * @return DocumentStatus
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param DocumentStatus $Status
     * @return Get_Header
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
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
     * @return Get_Header
     */
    public function setStoreId($StoreId)
    {
      $this->StoreId = $StoreId;
      return $this;
    }

    /**
     * @return float
     */
    public function getTaxExcludedTotalAmount()
    {
      return $this->TaxExcludedTotalAmount;
    }

    /**
     * @param float $TaxExcludedTotalAmount
     * @return Get_Header
     */
    public function setTaxExcludedTotalAmount($TaxExcludedTotalAmount)
    {
      $this->TaxExcludedTotalAmount = $TaxExcludedTotalAmount;
      return $this;
    }

    /**
     * @return float
     */
    public function getTaxIncludedTotalAmount()
    {
      return $this->TaxIncludedTotalAmount;
    }

    /**
     * @param float $TaxIncludedTotalAmount
     * @return Get_Header
     */
    public function setTaxIncludedTotalAmount($TaxIncludedTotalAmount)
    {
      $this->TaxIncludedTotalAmount = $TaxIncludedTotalAmount;
      return $this;
    }

    /**
     * @return float
     */
    public function getTotalQuantity()
    {
      return $this->TotalQuantity;
    }

    /**
     * @param float $TotalQuantity
     * @return Get_Header
     */
    public function setTotalQuantity($TotalQuantity)
    {
      $this->TotalQuantity = $TotalQuantity;
      return $this;
    }

    /**
     * @return ArrayOfUserDefinedDate
     */
    public function getUserDefinedDates()
    {
      return $this->UserDefinedDates;
    }

    /**
     * @param ArrayOfUserDefinedDate $UserDefinedDates
     * @return Get_Header
     */
    public function setUserDefinedDates($UserDefinedDates)
    {
      $this->UserDefinedDates = $UserDefinedDates;
      return $this;
    }

    /**
     * @return ArrayOfUserDefinedTable
     */
    public function getUserDefinedTables()
    {
      return $this->UserDefinedTables;
    }

    /**
     * @param ArrayOfUserDefinedTable $UserDefinedTables
     * @return Get_Header
     */
    public function setUserDefinedTables($UserDefinedTables)
    {
      $this->UserDefinedTables = $UserDefinedTables;
      return $this;
    }

    /**
     * @return ArrayOfUserField
     */
    public function getUserFields()
    {
      return $this->UserFields;
    }

    /**
     * @param ArrayOfUserField $UserFields
     * @return Get_Header
     */
    public function setUserFields($UserFields)
    {
      $this->UserFields = $UserFields;
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
     * @return Get_Header
     */
    public function setWarehouseId($WarehouseId)
    {
      $this->WarehouseId = $WarehouseId;
      return $this;
    }

}
