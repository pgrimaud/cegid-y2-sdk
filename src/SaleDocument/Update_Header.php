<?php

namespace Y2\SaleDocument;

class Update_Header
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
     * @var \DateTime $Date
     */
    protected $Date = null;

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
     * @var boolean $TaxExcluded
     */
    protected $TaxExcluded = null;

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
     * @return boolean
     */
    public function getActive()
    {
      return $this->Active;
    }

    /**
     * @param boolean $Active
     * @return Update_Header
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
     * @return Update_Header
     */
    public function setComment($Comment)
    {
      $this->Comment = $Comment;
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
     * @return Update_Header
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
    public function getExternalReference()
    {
      return $this->ExternalReference;
    }

    /**
     * @param string $ExternalReference
     * @return Update_Header
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
     * @return Update_Header
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
     * @return Update_Header
     */
    public function setFollowedReference($FollowedReference)
    {
      $this->FollowedReference = $FollowedReference;
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
     * @return Update_Header
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
     * @return Update_Header
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
     * @return Update_Header
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
     * @return Update_Header
     */
    public function setSalesPersonId($SalesPersonId)
    {
      $this->SalesPersonId = $SalesPersonId;
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
     * @return Update_Header
     */
    public function setTaxExcluded($TaxExcluded)
    {
      $this->TaxExcluded = $TaxExcluded;
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
     * @return Update_Header
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
     * @return Update_Header
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
     * @return Update_Header
     */
    public function setUserFields($UserFields)
    {
      $this->UserFields = $UserFields;
      return $this;
    }

}
