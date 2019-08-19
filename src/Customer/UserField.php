<?php

namespace Y2\Customer;

class UserField
{
    /**
     * @var boolean $BooleanValue
     */
    protected $BooleanValue = null;

    /**
     * @var \DateTime $DateValue
     */
    protected $DateValue = null;

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var string $ListElementValue
     */
    protected $ListElementValue = null;

    /**
     * @var float $NumberValue
     */
    protected $NumberValue = null;

    /**
     * @var string $TextValue
     */
    protected $TextValue = null;

    /**
     * @var UserFieldKind $ValueType
     */
    protected $ValueType = null;

    public function __construct()
    {

    }

    /**
     * @return boolean
     */
    public function getBooleanValue()
    {
        return $this->BooleanValue;
    }

    /**
     * @param boolean $BooleanValue
     *
     * @return UserField
     */
    public function setBooleanValue($BooleanValue)
    {
        $this->BooleanValue = $BooleanValue;
        return $this;
    }

    /**
     * @return bool|\DateTime|null
     */
    public function getDateValue()
    {
        if ($this->DateValue == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->DateValue);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $DateValue
     *
     * @return UserField
     */
    public function setDateValue(\DateTime $DateValue = null)
    {
        if ($DateValue == null) {
            $this->DateValue = null;
        } else {
            $this->DateValue = $DateValue->format(\DateTime::ATOM);
        }
        return $this;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param int $Id
     *
     * @return UserField
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return string
     */
    public function getListElementValue()
    {
        return $this->ListElementValue;
    }

    /**
     * @param string $ListElementValue
     *
     * @return UserField
     */
    public function setListElementValue($ListElementValue)
    {
        $this->ListElementValue = $ListElementValue;
        return $this;
    }

    /**
     * @return float
     */
    public function getNumberValue()
    {
        return $this->NumberValue;
    }

    /**
     * @param float $NumberValue
     *
     * @return UserField
     */
    public function setNumberValue($NumberValue)
    {
        $this->NumberValue = $NumberValue;
        return $this;
    }

    /**
     * @return string
     */
    public function getTextValue()
    {
        return $this->TextValue;
    }

    /**
     * @param string $TextValue
     *
     * @return UserField
     */
    public function setTextValue($TextValue)
    {
        $this->TextValue = $TextValue;
        return $this;
    }

    /**
     * @return UserFieldKind
     */
    public function getValueType()
    {
        return $this->ValueType;
    }

    /**
     * @param UserFieldKind $ValueType
     *
     * @return UserField
     */
    public function setValueType($ValueType)
    {
        $this->ValueType = $ValueType;
        return $this;
    }

}
