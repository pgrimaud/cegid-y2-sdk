<?php

namespace Y2\Customer;

class UserDefinedValue
{

    /**
     * @var UserDefinedId $Id
     */
    protected $Id = null;

    /**
     * @var float $Value
     */
    protected $Value = null;

    public function __construct()
    {

    }

    /**
     * @return UserDefinedId
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param UserDefinedId $Id
     *
     * @return UserDefinedValue
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return float
     */
    public function getValue()
    {
        return $this->Value;
    }

    /**
     * @param float $Value
     *
     * @return UserDefinedValue
     */
    public function setValue($Value)
    {
        $this->Value = $Value;
        return $this;
    }

}
