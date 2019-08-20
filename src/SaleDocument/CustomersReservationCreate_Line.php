<?php

namespace Y2\SaleDocument;

class CustomersReservationCreate_Line
{

    /**
     * @var string $CatalogReference
     */
    protected $CatalogReference = null;

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
     * @var float $NetUnitPrice
     */
    protected $NetUnitPrice = null;

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
    public function getCatalogReference()
    {
      return $this->CatalogReference;
    }

    /**
     * @param string $CatalogReference
     * @return CustomersReservationCreate_Line
     */
    public function setCatalogReference($CatalogReference)
    {
      $this->CatalogReference = $CatalogReference;
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
     * @return CustomersReservationCreate_Line
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
     * @return CustomersReservationCreate_Line
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
     * @return CustomersReservationCreate_Line
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
     * @return CustomersReservationCreate_Line
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
     * @return CustomersReservationCreate_Line
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
     * @return CustomersReservationCreate_Line
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
     * @return CustomersReservationCreate_Line
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
     * @return CustomersReservationCreate_Line
     */
    public function setNetUnitPrice($NetUnitPrice)
    {
      $this->NetUnitPrice = $NetUnitPrice;
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
     * @return CustomersReservationCreate_Line
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
     * @return CustomersReservationCreate_Line
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
     * @return CustomersReservationCreate_Line
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
     * @return CustomersReservationCreate_Line
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
     * @return CustomersReservationCreate_Line
     */
    public function setUnitPrice($UnitPrice)
    {
      $this->UnitPrice = $UnitPrice;
      return $this;
    }

}
