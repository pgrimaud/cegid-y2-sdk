<?php

namespace Y2\SaleDocument;

class Create_Line
{

    /**
     * @var string $BonId
     */
    protected $BonId = null;

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
     * @var ItemIdentifier $ItemIdentifier
     */
    protected $ItemIdentifier = null;

    /**
     * @var string $Label
     */
    protected $Label = null;

    /**
     * @var string $MovementReasonId
     */
    protected $MovementReasonId = null;

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
     * @var ArrayOfCreate_Tax $Taxes
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
    public function getBonId()
    {
        return $this->BonId;
    }

    /**
     * @param string $BonId
     *
     * @return Create_Line
     */
    public function setBonId($BonId)
    {
        $this->BonId = $BonId;
        return $this;
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
     *
     * @return Create_Line
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
     *
     * @return Create_Line
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
     *
     * @return Create_Line
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
     *
     * @return Create_Line
     */
    public function setDeliveryDate(\DateTime $DeliveryDate = null)
    {
        if ($DeliveryDate == null) {
            $this->DeliveryDate = null;
        } else {
            $this->DeliveryDate = $DeliveryDate->format('Y-m-d');
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
     *
     * @return Create_Line
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
     *
     * @return Create_Line
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
     *
     * @return Create_Line
     */
    public function setInitialDeliveryDate(\DateTime $InitialDeliveryDate = null)
    {
        if ($InitialDeliveryDate == null) {
            $this->InitialDeliveryDate = null;
        } else {
            $this->InitialDeliveryDate = $InitialDeliveryDate->format('Y-m-d');
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
     *
     * @return Create_Line
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
     *
     * @return Create_Line
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
     *
     * @return Create_Line
     */
    public function setMovementReasonId($MovementReasonId)
    {
        $this->MovementReasonId = $MovementReasonId;
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
     *
     * @return Create_Line
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
     *
     * @return Create_Line
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
     * @return Create_Line
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
     *
     * @return Create_Line
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
     *
     * @return Create_Line
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
     *
     * @return Create_Line
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
     *
     * @return Create_Line
     */
    public function setSerialNumberId($SerialNumberId)
    {
        $this->SerialNumberId = $SerialNumberId;
        return $this;
    }

    /**
     * @return ArrayOfCreate_Tax
     */
    public function getTaxes()
    {
        return $this->Taxes;
    }

    /**
     * @param ArrayOfCreate_Tax $Taxes
     *
     * @return Create_Line
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
     *
     * @return Create_Line
     */
    public function setUnitPrice($UnitPrice)
    {
        $this->UnitPrice = $UnitPrice;
        return $this;
    }

}
