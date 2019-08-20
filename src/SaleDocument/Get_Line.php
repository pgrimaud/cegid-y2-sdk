<?php

namespace Y2\SaleDocument;

class Get_Line
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
     * @var string $ExternalReference
     */
    protected $ExternalReference = null;

    /**
     * @var \DateTime $InitialDeliveryDate
     */
    protected $InitialDeliveryDate = null;

    /**
     * @var string $ItemCode
     */
    protected $ItemCode = null;

    /**
     * @var string $ItemId
     */
    protected $ItemId = null;

    /**
     * @var string $ItemReference
     */
    protected $ItemReference = null;

    /**
     * @var string $Label
     */
    protected $Label = null;

    /**
     * @var string $MovementReasonId
     */
    protected $MovementReasonId = null;

    /**
     * @var GetOmniChannelLine $OmniChannel
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
     * @var int $Rank
     */
    protected $Rank = null;

    /**
     * @var string $SalesPersonId
     */
    protected $SalesPersonId = null;

    /**
     * @var string $SerialNumberId
     */
    protected $SerialNumberId = null;

    /**
     * @var float $TaxExcludedNetUnitPrice
     */
    protected $TaxExcludedNetUnitPrice = null;

    /**
     * @var float $TaxExcludedUnitPrice
     */
    protected $TaxExcludedUnitPrice = null;

    /**
     * @var float $TaxIncludedNetUnitPrice
     */
    protected $TaxIncludedNetUnitPrice = null;

    /**
     * @var float $TaxIncludedUnitPrice
     */
    protected $TaxIncludedUnitPrice = null;

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
    public function getCatalogReference()
    {
      return $this->CatalogReference;
    }

    /**
     * @param string $CatalogReference
     * @return Get_Line
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
     * @return Get_Line
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
     * @return Get_Line
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
     * @return Get_Line
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
     * @return Get_Line
     */
    public function setDiscountTypeId($DiscountTypeId)
    {
      $this->DiscountTypeId = $DiscountTypeId;
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
     * @return Get_Line
     */
    public function setExternalReference($ExternalReference)
    {
      $this->ExternalReference = $ExternalReference;
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
     * @return Get_Line
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
     * @return string
     */
    public function getItemCode()
    {
      return $this->ItemCode;
    }

    /**
     * @param string $ItemCode
     * @return Get_Line
     */
    public function setItemCode($ItemCode)
    {
      $this->ItemCode = $ItemCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getItemId()
    {
      return $this->ItemId;
    }

    /**
     * @param string $ItemId
     * @return Get_Line
     */
    public function setItemId($ItemId)
    {
      $this->ItemId = $ItemId;
      return $this;
    }

    /**
     * @return string
     */
    public function getItemReference()
    {
      return $this->ItemReference;
    }

    /**
     * @param string $ItemReference
     * @return Get_Line
     */
    public function setItemReference($ItemReference)
    {
      $this->ItemReference = $ItemReference;
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
     * @return Get_Line
     */
    public function setLabel($Label)
    {
      $this->Label = $Label;
      return $this;
    }

    /**
     * @return string
     */
    public function getMovementReasonId()
    {
      return $this->MovementReasonId;
    }

    /**
     * @param string $MovementReasonId
     * @return Get_Line
     */
    public function setMovementReasonId($MovementReasonId)
    {
      $this->MovementReasonId = $MovementReasonId;
      return $this;
    }

    /**
     * @return GetOmniChannelLine
     */
    public function getOmniChannel()
    {
      return $this->OmniChannel;
    }

    /**
     * @param GetOmniChannelLine $OmniChannel
     * @return Get_Line
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
     * @return Get_Line
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
     * @return Get_Line
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
     * @return Get_Line
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
      return $this;
    }

    /**
     * @return int
     */
    public function getRank()
    {
      return $this->Rank;
    }

    /**
     * @param int $Rank
     * @return Get_Line
     */
    public function setRank($Rank)
    {
      $this->Rank = $Rank;
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
     * @return Get_Line
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
     * @return Get_Line
     */
    public function setSerialNumberId($SerialNumberId)
    {
      $this->SerialNumberId = $SerialNumberId;
      return $this;
    }

    /**
     * @return float
     */
    public function getTaxExcludedNetUnitPrice()
    {
      return $this->TaxExcludedNetUnitPrice;
    }

    /**
     * @param float $TaxExcludedNetUnitPrice
     * @return Get_Line
     */
    public function setTaxExcludedNetUnitPrice($TaxExcludedNetUnitPrice)
    {
      $this->TaxExcludedNetUnitPrice = $TaxExcludedNetUnitPrice;
      return $this;
    }

    /**
     * @return float
     */
    public function getTaxExcludedUnitPrice()
    {
      return $this->TaxExcludedUnitPrice;
    }

    /**
     * @param float $TaxExcludedUnitPrice
     * @return Get_Line
     */
    public function setTaxExcludedUnitPrice($TaxExcludedUnitPrice)
    {
      $this->TaxExcludedUnitPrice = $TaxExcludedUnitPrice;
      return $this;
    }

    /**
     * @return float
     */
    public function getTaxIncludedNetUnitPrice()
    {
      return $this->TaxIncludedNetUnitPrice;
    }

    /**
     * @param float $TaxIncludedNetUnitPrice
     * @return Get_Line
     */
    public function setTaxIncludedNetUnitPrice($TaxIncludedNetUnitPrice)
    {
      $this->TaxIncludedNetUnitPrice = $TaxIncludedNetUnitPrice;
      return $this;
    }

    /**
     * @return float
     */
    public function getTaxIncludedUnitPrice()
    {
      return $this->TaxIncludedUnitPrice;
    }

    /**
     * @param float $TaxIncludedUnitPrice
     * @return Get_Line
     */
    public function setTaxIncludedUnitPrice($TaxIncludedUnitPrice)
    {
      $this->TaxIncludedUnitPrice = $TaxIncludedUnitPrice;
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
     * @return Get_Line
     */
    public function setWarehouseId($WarehouseId)
    {
      $this->WarehouseId = $WarehouseId;
      return $this;
    }

}
