<?php

namespace Y2\SaleDocument;

class UpdateHeader_Request
{

    /**
     * @var string $Comment
     */
    protected $Comment = null;

    /**
     * @var Address $DeliveryAddress
     */
    protected $DeliveryAddress = null;

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
     * @var SaleDocumentIdentifier $Identifier
     */
    protected $Identifier = null;

    /**
     * @var Address $InvoicingAddress
     */
    protected $InvoicingAddress = null;

    /**
     * @var boolean $LinesUnmodifiable
     */
    protected $LinesUnmodifiable = null;

    /**
     * @var OmniChannel $OmniChannel
     */
    protected $OmniChannel = null;

    /**
     * @var string $SalesPersonId
     */
    protected $SalesPersonId = null;

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

    
    public function __construct()
    {
    
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
     * @return UpdateHeader_Request
     */
    public function setComment($Comment)
    {
      $this->Comment = $Comment;
      return $this;
    }

    /**
     * @return Address
     */
    public function getDeliveryAddress()
    {
      return $this->DeliveryAddress;
    }

    /**
     * @param Address $DeliveryAddress
     * @return UpdateHeader_Request
     */
    public function setDeliveryAddress($DeliveryAddress)
    {
      $this->DeliveryAddress = $DeliveryAddress;
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
     * @return UpdateHeader_Request
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
     * @return UpdateHeader_Request
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
     * @return UpdateHeader_Request
     */
    public function setFollowedReference($FollowedReference)
    {
      $this->FollowedReference = $FollowedReference;
      return $this;
    }

    /**
     * @return SaleDocumentIdentifier
     */
    public function getIdentifier()
    {
      return $this->Identifier;
    }

    /**
     * @param SaleDocumentIdentifier $Identifier
     * @return UpdateHeader_Request
     */
    public function setIdentifier($Identifier)
    {
      $this->Identifier = $Identifier;
      return $this;
    }

    /**
     * @return Address
     */
    public function getInvoicingAddress()
    {
      return $this->InvoicingAddress;
    }

    /**
     * @param Address $InvoicingAddress
     * @return UpdateHeader_Request
     */
    public function setInvoicingAddress($InvoicingAddress)
    {
      $this->InvoicingAddress = $InvoicingAddress;
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
     * @return UpdateHeader_Request
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
     * @return UpdateHeader_Request
     */
    public function setOmniChannel($OmniChannel)
    {
      $this->OmniChannel = $OmniChannel;
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
     * @return UpdateHeader_Request
     */
    public function setSalesPersonId($SalesPersonId)
    {
      $this->SalesPersonId = $SalesPersonId;
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
     * @return UpdateHeader_Request
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
     * @return UpdateHeader_Request
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
     * @return UpdateHeader_Request
     */
    public function setUserFields($UserFields)
    {
      $this->UserFields = $UserFields;
      return $this;
    }

}
