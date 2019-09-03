<?php

namespace Y2\SaleDocument;

class Create_Header
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
     * @var SaleDocumentLineIdentifier $Deposit
     */
    protected $Deposit = null;

    /**
     * @var string $ExternalReference
     */
    protected $ExternalReference = null;

    /**
     * @var \DateTime $ExternalReferenceDate
     */
    protected $ExternalReferenceDate = null;

    /**
     * @var string $FollowedReference
     */
    protected $FollowedReference = null;

    /**
     * @var string $InternalReference
     */
    protected $InternalReference = null;

    /**
     * @var boolean $LinesUnmodifiable
     */
    protected $LinesUnmodifiable = null;

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
     * @var string $StoreId
     */
    protected $StoreId = null;

    /**
     * @var boolean $TaxExcluded
     */
    protected $TaxExcluded = null;

    /**
     * @var string $Type
     */
    protected $Type = null;

    /**
     * @var ArrayOfUserDefinedDate $UserDefinedDates
     */
    protected $UserDefinedDates = null;

    /**
     * @var ArrayOfUserDefinedTableCustomer $UserDefinedTableCustomers
     */
    protected $UserDefinedTableCustomers = null;

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
     *
     * @return Create_Header
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
     *
     * @return Create_Header
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
     *
     * @return Create_Header
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
     *
     * @return Create_Header
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
     *
     * @return Create_Header
     */
    public function setDate(\DateTime $Date = null)
    {
        if ($Date == null) {
            $this->Date = null;
        } else {
            $this->Date = $Date->format('Y-m-d');
        }
        return $this;
    }

    /**
     * @return SaleDocumentLineIdentifier
     */
    public function getDeposit()
    {
        return $this->Deposit;
    }

    /**
     * @param SaleDocumentLineIdentifier $Deposit
     *
     * @return Create_Header
     */
    public function setDeposit($Deposit)
    {
        $this->Deposit = $Deposit;
        return $this;
    }

    /**
     * @return string
     */
    public function getExternalReference()
    {
        return $this->ExternalReference;
    }

    /**
     * @param string $ExternalReference
     *
     * @return Create_Header
     */
    public function setExternalReference($ExternalReference)
    {
        $this->ExternalReference = $ExternalReference;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getExternalReferenceDate()
    {
        if ($this->ExternalReferenceDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->ExternalReferenceDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $ExternalReferenceDate
     *
     * @return Create_Header
     */
    public function setExternalReferenceDate(\DateTime $ExternalReferenceDate = null)
    {
        if ($ExternalReferenceDate == null) {
            $this->ExternalReferenceDate = null;
        } else {
            $this->ExternalReferenceDate = $ExternalReferenceDate->format(\DateTime::ATOM);
        }
        return $this;
    }

    /**
     * @return string
     */
    public function getFollowedReference()
    {
        return $this->FollowedReference;
    }

    /**
     * @param string $FollowedReference
     *
     * @return Create_Header
     */
    public function setFollowedReference($FollowedReference)
    {
        $this->FollowedReference = $FollowedReference;
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
     *
     * @return Create_Header
     */
    public function setInternalReference($InternalReference)
    {
        $this->InternalReference = $InternalReference;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getLinesUnmodifiable()
    {
        return $this->LinesUnmodifiable;
    }

    /**
     * @param boolean $LinesUnmodifiable
     *
     * @return Create_Header
     */
    public function setLinesUnmodifiable($LinesUnmodifiable)
    {
        $this->LinesUnmodifiable = $LinesUnmodifiable;
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
     *
     * @return Create_Header
     */
    public function setOmniChannel($OmniChannel)
    {
        $this->OmniChannel = $OmniChannel;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrigin()
    {
        return $this->Origin;
    }

    /**
     * @param string $Origin
     *
     * @return Create_Header
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
     *
     * @return Create_Header
     */
    public function setSalesPersonId($SalesPersonId)
    {
        $this->SalesPersonId = $SalesPersonId;
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
     *
     * @return Create_Header
     */
    public function setStoreId($StoreId)
    {
        $this->StoreId = $StoreId;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getTaxExcluded()
    {
        return $this->TaxExcluded;
    }

    /**
     * @param boolean $TaxExcluded
     *
     * @return Create_Header
     */
    public function setTaxExcluded($TaxExcluded)
    {
        $this->TaxExcluded = $TaxExcluded;
        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * @param string $Type
     *
     * @return Create_Header
     */
    public function setType($Type)
    {
        $this->Type = $Type;
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
     *
     * @return Create_Header
     */
    public function setUserDefinedDates($UserDefinedDates)
    {
        $this->UserDefinedDates = $UserDefinedDates;
        return $this;
    }

    /**
     * @return ArrayOfUserDefinedTableCustomer
     */
    public function getUserDefinedTableCustomers()
    {
        return $this->UserDefinedTableCustomers;
    }

    /**
     * @param ArrayOfUserDefinedTableCustomer $UserDefinedTableCustomers
     *
     * @return Create_Header
     */
    public function setUserDefinedTableCustomers($UserDefinedTableCustomers)
    {
        $this->UserDefinedTableCustomers = $UserDefinedTableCustomers;
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
     *
     * @return Create_Header
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
     *
     * @return Create_Header
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
     *
     * @return Create_Header
     */
    public function setWarehouseId($WarehouseId)
    {
        $this->WarehouseId = $WarehouseId;
        return $this;
    }

}
