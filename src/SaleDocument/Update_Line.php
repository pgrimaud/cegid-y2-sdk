<?php

namespace Y2\SaleDocument;

class Update_Line
{

    /**
     * @var string $CatalogReference
     */
    protected $CatalogReference = null;

    /**
     * @var string $Comment
     */
    protected $Comment = null;

    /**
     * @var string $ComplementaryDescription
     */
    protected $ComplementaryDescription = null;

    /**
     * @var \DateTime $DeliveryDate
     */
    protected $DeliveryDate = null;

    /**
     * @var string $DiscountTypeId
     */
    protected $DiscountTypeId = null;

    /**
     * @var \DateTime $InitialDeliveryDate
     */
    protected $InitialDeliveryDate = null;

    /**
     * @var ItemIdentifier $ItemIdentifier
     */
    protected $ItemIdentifier = null;

    /**
     * @var string $Label
     */
    protected $Label = null;

    /**
     * @var float $NetUnitPrice
     */
    protected $NetUnitPrice = null;

    /**
     * @var OmniChannelLine $OmniChannel
     */
    protected $OmniChannel = null;

    /**
     * @var DocumentOrigin $Origin
     */
    protected $Origin = null;

    /**
     * @var string $PackageReference
     */
    protected $PackageReference = null;

    /**
     * @var float $Quantity
     */
    protected $Quantity = null;

    /**
     * @var string $SalesPersonId
     */
    protected $SalesPersonId = null;

    /**
     * @var string $SerialNumberId
     */
    protected $SerialNumberId = null;

    /**
     * @var ArrayOfUpdate_Tax $Taxes
     */
    protected $Taxes = null;

    /**
     * @var float $UnitPrice
     */
    protected $UnitPrice = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCatalogReference()
    {
      return $this->CatalogReference;
    }

    /**
     * @param string $CatalogReference
     * @return Update_Line
     */
    public function setCatalogReference($CatalogReference)
    {
      $this->CatalogReference = $CatalogReference;
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
     * @return Update_Line
     */
    public function setComment($Comment)
    {
      $this->Comment = $Comment;
      return $this;
    }

    /**
     * @return string
     */
    public function getComplementaryDescription()
    {
      return $this->ComplementaryDescription;
    }

    /**
     * @param string $ComplementaryDescription
     * @return Update_Line
     */
    public function setComplementaryDescription($ComplementaryDescription)
    {
      $this->ComplementaryDescription = $ComplementaryDescription;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDeliveryDate()
    {
      if ($this->DeliveryDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DeliveryDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DeliveryDate
     * @return Update_Line
     */
    public function setDeliveryDate(\DateTime $DeliveryDate = null)
    {
      if ($DeliveryDate == null) {
       $this->DeliveryDate = null;
      } else {
        $this->DeliveryDate = $DeliveryDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getDiscountTypeId()
    {
      return $this->DiscountTypeId;
    }

    /**
     * @param string $DiscountTypeId
     * @return Update_Line
     */
    public function setDiscountTypeId($DiscountTypeId)
    {
      $this->DiscountTypeId = $DiscountTypeId;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getInitialDeliveryDate()
    {
      if ($this->InitialDeliveryDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->InitialDeliveryDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $InitialDeliveryDate
     * @return Update_Line
     */
    public function setInitialDeliveryDate(\DateTime $InitialDeliveryDate = null)
    {
      if ($InitialDeliveryDate == null) {
       $this->InitialDeliveryDate = null;
      } else {
        $this->InitialDeliveryDate = $InitialDeliveryDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return ItemIdentifier
     */
    public function getItemIdentifier()
    {
      return $this->ItemIdentifier;
    }

    /**
     * @param ItemIdentifier $ItemIdentifier
     * @return Update_Line
     */
    public function setItemIdentifier($ItemIdentifier)
    {
      $this->ItemIdentifier = $ItemIdentifier;
      return $this;
    }

    /**
     * @return string
     */
    public function getLabel()
    {
      return $this->Label;
    }

    /**
     * @param string $Label
     * @return Update_Line
     */
    public function setLabel($Label)
    {
      $this->Label = $Label;
      return $this;
    }

    /**
     * @return float
     */
    public function getNetUnitPrice()
    {
      return $this->NetUnitPrice;
    }

    /**
     * @param float $NetUnitPrice
     * @return Update_Line
     */
    public function setNetUnitPrice($NetUnitPrice)
    {
      $this->NetUnitPrice = $NetUnitPrice;
      return $this;
    }

    /**
     * @return OmniChannelLine
     */
    public function getOmniChannel()
    {
      return $this->OmniChannel;
    }

    /**
     * @param OmniChannelLine $OmniChannel
     * @return Update_Line
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
     * @return Update_Line
     */
    public function setOrigin($Origin)
    {
      $this->Origin = $Origin;
      return $this;
    }

    /**
     * @return string
     */
    public function getPackageReference()
    {
      return $this->PackageReference;
    }

    /**
     * @param string $PackageReference
     * @return Update_Line
     */
    public function setPackageReference($PackageReference)
    {
      $this->PackageReference = $PackageReference;
      return $this;
    }

    /**
     * @return float
     */
    public function getQuantity()
    {
      return $this->Quantity;
    }

    /**
     * @param float $Quantity
     * @return Update_Line
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
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
     * @return Update_Line
     */
    public function setSalesPersonId($SalesPersonId)
    {
      $this->SalesPersonId = $SalesPersonId;
      return $this;
    }

    /**
     * @return string
     */
    public function getSerialNumberId()
    {
      return $this->SerialNumberId;
    }

    /**
     * @param string $SerialNumberId
     * @return Update_Line
     */
    public function setSerialNumberId($SerialNumberId)
    {
      $this->SerialNumberId = $SerialNumberId;
      return $this;
    }

    /**
     * @return ArrayOfUpdate_Tax
     */
    public function getTaxes()
    {
      return $this->Taxes;
    }

    /**
     * @param ArrayOfUpdate_Tax $Taxes
     * @return Update_Line
     */
    public function setTaxes($Taxes)
    {
      $this->Taxes = $Taxes;
      return $this;
    }

    /**
     * @return float
     */
    public function getUnitPrice()
    {
      return $this->UnitPrice;
    }

    /**
     * @param float $UnitPrice
     * @return Update_Line
     */
    public function setUnitPrice($UnitPrice)
    {
      $this->UnitPrice = $UnitPrice;
      return $this;
    }

}
