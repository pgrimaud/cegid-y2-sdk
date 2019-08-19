<?php

namespace Y2\Customer;

class NationalityDataType
{
    /**
     * @var string $ISO2
     */
    protected $ISO2 = null;

    /**
     * @var string $ISO3
     */
    protected $ISO3 = null;

    /**
     * @var string $ISO3Num
     */
    protected $ISO3Num = null;

    /**
     * @var string $Id
     */
    protected $Id = null;

    /**
     * @var string $Label
     */
    protected $Label = null;

    public function __construct()
    {

    }

    /**
     * @return string
     */
    public function getISO2()
    {
        return $this->ISO2;
    }

    /**
     * @param string $ISO2
     *
     * @return NationalityDataType
     */
    public function setISO2($ISO2)
    {
        $this->ISO2 = $ISO2;
        return $this;
    }

    /**
     * @return string
     */
    public function getISO3()
    {
        return $this->ISO3;
    }

    /**
     * @param string $ISO3
     *
     * @return NationalityDataType
     */
    public function setISO3($ISO3)
    {
        $this->ISO3 = $ISO3;
        return $this;
    }

    /**
     * @return string
     */
    public function getISO3Num()
    {
        return $this->ISO3Num;
    }

    /**
     * @param string $ISO3Num
     *
     * @return NationalityDataType
     */
    public function setISO3Num($ISO3Num)
    {
        $this->ISO3Num = $ISO3Num;
        return $this;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param string $Id
     *
     * @return NationalityDataType
     */
    public function setId($Id)
    {
        $this->Id = $Id;
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
     * @return NationalityDataType
     */
    public function setLabel($Label)
    {
        $this->Label = $Label;
        return $this;
    }

}
