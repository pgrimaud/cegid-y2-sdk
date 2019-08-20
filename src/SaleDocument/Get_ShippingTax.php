<?php

namespace Y2\SaleDocument;

class Get_ShippingTax
{

    /**
     * @var string $ShippingTaxCode
     */
    protected $ShippingTaxCode = null;

    /**
     * @var float $TaxExcludedAmount
     */
    protected $TaxExcludedAmount = null;

    /**
     * @var float $TaxIncludedAmount
     */
    protected $TaxIncludedAmount = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getShippingTaxCode()
    {
      return $this->ShippingTaxCode;
    }

    /**
     * @param string $ShippingTaxCode
     * @return Get_ShippingTax
     */
    public function setShippingTaxCode($ShippingTaxCode)
    {
      $this->ShippingTaxCode = $ShippingTaxCode;
      return $this;
    }

    /**
     * @return float
     */
    public function getTaxExcludedAmount()
    {
      return $this->TaxExcludedAmount;
    }

    /**
     * @param float $TaxExcludedAmount
     * @return Get_ShippingTax
     */
    public function setTaxExcludedAmount($TaxExcludedAmount)
    {
      $this->TaxExcludedAmount = $TaxExcludedAmount;
      return $this;
    }

    /**
     * @return float
     */
    public function getTaxIncludedAmount()
    {
      return $this->TaxIncludedAmount;
    }

    /**
     * @param float $TaxIncludedAmount
     * @return Get_ShippingTax
     */
    public function setTaxIncludedAmount($TaxIncludedAmount)
    {
      $this->TaxIncludedAmount = $TaxIncludedAmount;
      return $this;
    }

}
