<?php

namespace Y2\Customer;

class PhoneDataType
{
    /**
     * @var string $AlternativePhoneNumber
     */
    protected $AlternativePhoneNumber = null;

    /**
     * @var string $CellularPhoneNumber
     */
    protected $CellularPhoneNumber = null;

    /**
     * @var string $HomePhoneNumber
     */
    protected $HomePhoneNumber = null;

    /**
     * @var string $OfficePhoneNumber
     */
    protected $OfficePhoneNumber = null;

    public function __construct()
    {

    }

    /**
     * @return string
     */
    public function getAlternativePhoneNumber()
    {
        return $this->AlternativePhoneNumber;
    }

    /**
     * @param string $AlternativePhoneNumber
     *
     * @return PhoneDataType
     */
    public function setAlternativePhoneNumber($AlternativePhoneNumber)
    {
        $this->AlternativePhoneNumber = $AlternativePhoneNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getCellularPhoneNumber()
    {
        return $this->CellularPhoneNumber;
    }

    /**
     * @param string $CellularPhoneNumber
     *
     * @return PhoneDataType
     */
    public function setCellularPhoneNumber($CellularPhoneNumber)
    {
        $this->CellularPhoneNumber = $CellularPhoneNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getHomePhoneNumber()
    {
        return $this->HomePhoneNumber;
    }

    /**
     * @param string $HomePhoneNumber
     *
     * @return PhoneDataType
     */
    public function setHomePhoneNumber($HomePhoneNumber)
    {
        $this->HomePhoneNumber = $HomePhoneNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getOfficePhoneNumber()
    {
        return $this->OfficePhoneNumber;
    }

    /**
     * @param string $OfficePhoneNumber
     *
     * @return PhoneDataType
     */
    public function setOfficePhoneNumber($OfficePhoneNumber)
    {
        $this->OfficePhoneNumber = $OfficePhoneNumber;
        return $this;
    }

}
