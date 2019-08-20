<?php

namespace Y2\SaleDocument;

class Address
{

    /**
     * @var string $City
     */
    protected $City = null;

    /**
     * @var int $ContactNumber
     */
    protected $ContactNumber = null;

    /**
     * @var string $CountryId
     */
    protected $CountryId = null;

    /**
     * @var CountryIdType $CountryIdType
     */
    protected $CountryIdType = null;

    /**
     * @var string $FirstName
     */
    protected $FirstName = null;

    /**
     * @var string $LastName
     */
    protected $LastName = null;

    /**
     * @var string $Line1
     */
    protected $Line1 = null;

    /**
     * @var string $Line2
     */
    protected $Line2 = null;

    /**
     * @var string $Line3
     */
    protected $Line3 = null;

    /**
     * @var string $PhoneNumber
     */
    protected $PhoneNumber = null;

    /**
     * @var string $Region
     */
    protected $Region = null;

    /**
     * @var string $TitleId
     */
    protected $TitleId = null;

    /**
     * @var string $ZipCode
     */
    protected $ZipCode = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCity()
    {
      return $this->City;
    }

    /**
     * @param string $City
     * @return Address
     */
    public function setCity($City)
    {
      $this->City = $City;
      return $this;
    }

    /**
     * @return int
     */
    public function getContactNumber()
    {
      return $this->ContactNumber;
    }

    /**
     * @param int $ContactNumber
     * @return Address
     */
    public function setContactNumber($ContactNumber)
    {
      $this->ContactNumber = $ContactNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountryId()
    {
      return $this->CountryId;
    }

    /**
     * @param string $CountryId
     * @return Address
     */
    public function setCountryId($CountryId)
    {
      $this->CountryId = $CountryId;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountryIdType()
    {
      return $this->CountryIdType;
    }

    /**
     * @param string $CountryIdType
     * @return Address
     */
    public function setCountryIdType($CountryIdType)
    {
      $this->CountryIdType = $CountryIdType;
      return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
      return $this->FirstName;
    }

    /**
     * @param string $FirstName
     * @return Address
     */
    public function setFirstName($FirstName)
    {
      $this->FirstName = $FirstName;
      return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
      return $this->LastName;
    }

    /**
     * @param string $LastName
     * @return Address
     */
    public function setLastName($LastName)
    {
      $this->LastName = $LastName;
      return $this;
    }

    /**
     * @return string
     */
    public function getLine1()
    {
      return $this->Line1;
    }

    /**
     * @param string $Line1
     * @return Address
     */
    public function setLine1($Line1)
    {
      $this->Line1 = $Line1;
      return $this;
    }

    /**
     * @return string
     */
    public function getLine2()
    {
      return $this->Line2;
    }

    /**
     * @param string $Line2
     * @return Address
     */
    public function setLine2($Line2)
    {
      $this->Line2 = $Line2;
      return $this;
    }

    /**
     * @return string
     */
    public function getLine3()
    {
      return $this->Line3;
    }

    /**
     * @param string $Line3
     * @return Address
     */
    public function setLine3($Line3)
    {
      $this->Line3 = $Line3;
      return $this;
    }

    /**
     * @return string
     */
    public function getPhoneNumber()
    {
      return $this->PhoneNumber;
    }

    /**
     * @param string $PhoneNumber
     * @return Address
     */
    public function setPhoneNumber($PhoneNumber)
    {
      $this->PhoneNumber = $PhoneNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getRegion()
    {
      return $this->Region;
    }

    /**
     * @param string $Region
     * @return Address
     */
    public function setRegion($Region)
    {
      $this->Region = $Region;
      return $this;
    }

    /**
     * @return string
     */
    public function getTitleId()
    {
      return $this->TitleId;
    }

    /**
     * @param string $TitleId
     * @return Address
     */
    public function setTitleId($TitleId)
    {
      $this->TitleId = $TitleId;
      return $this;
    }

    /**
     * @return string
     */
    public function getZipCode()
    {
      return $this->ZipCode;
    }

    /**
     * @param string $ZipCode
     * @return Address
     */
    public function setZipCode($ZipCode)
    {
      $this->ZipCode = $ZipCode;
      return $this;
    }

}
