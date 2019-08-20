<?php

namespace Y2\SaleDocument;

class Get_Payment
{

    /**
     * @var float $Amount
     */
    protected $Amount = null;

    /**
     * @var float $CashAmount
     */
    protected $CashAmount = null;

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var CreditCard $CreditCard
     */
    protected $CreditCard = null;

    /**
     * @var string $Currency
     */
    protected $Currency = null;

    /**
     * @var string $CurrencySymbol
     */
    protected $CurrencySymbol = null;

    /**
     * @var \DateTime $DueDate
     */
    protected $DueDate = null;

    /**
     * @var boolean $IsReceivedPayment
     */
    protected $IsReceivedPayment = null;

    /**
     * @var string $Label
     */
    protected $Label = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return float
     */
    public function getAmount()
    {
      return $this->Amount;
    }

    /**
     * @param float $Amount
     * @return Get_Payment
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return float
     */
    public function getCashAmount()
    {
      return $this->CashAmount;
    }

    /**
     * @param float $CashAmount
     * @return Get_Payment
     */
    public function setCashAmount($CashAmount)
    {
      $this->CashAmount = $CashAmount;
      return $this;
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param string $Code
     * @return Get_Payment
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return CreditCard
     */
    public function getCreditCard()
    {
      return $this->CreditCard;
    }

    /**
     * @param CreditCard $CreditCard
     * @return Get_Payment
     */
    public function setCreditCard($CreditCard)
    {
      $this->CreditCard = $CreditCard;
      return $this;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
      return $this->Currency;
    }

    /**
     * @param string $Currency
     * @return Get_Payment
     */
    public function setCurrency($Currency)
    {
      $this->Currency = $Currency;
      return $this;
    }

    /**
     * @return string
     */
    public function getCurrencySymbol()
    {
      return $this->CurrencySymbol;
    }

    /**
     * @param string $CurrencySymbol
     * @return Get_Payment
     */
    public function setCurrencySymbol($CurrencySymbol)
    {
      $this->CurrencySymbol = $CurrencySymbol;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDueDate()
    {
      if ($this->DueDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DueDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DueDate
     * @return Get_Payment
     */
    public function setDueDate(\DateTime $DueDate = null)
    {
      if ($DueDate == null) {
       $this->DueDate = null;
      } else {
        $this->DueDate = $DueDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsReceivedPayment()
    {
      return $this->IsReceivedPayment;
    }

    /**
     * @param boolean $IsReceivedPayment
     * @return Get_Payment
     */
    public function setIsReceivedPayment($IsReceivedPayment)
    {
      $this->IsReceivedPayment = $IsReceivedPayment;
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
     * @return Get_Payment
     */
    public function setLabel($Label)
    {
      $this->Label = $Label;
      return $this;
    }

}
