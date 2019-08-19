<?php

namespace Y2\Customer;

class CustomerDataBase
{
    /**
     * @var string $ActivitySectorCode
     */
    protected $ActivitySectorCode = null;

    /**
     * @var AddressDataType $AddressData
     */
    protected $AddressData = null;

    /**
     * @var string $AlternateFirstName
     */
    protected $AlternateFirstName = null;

    /**
     * @var string $AlternateLastName
     */
    protected $AlternateLastName = null;

    /**
     * @var string $BusinessAreaCode
     */
    protected $BusinessAreaCode = null;

    /**
     * @var string $CpfCnpjCode
     */
    protected $CpfCnpjCode = null;

    /**
     * @var EmailDataType $EmailData
     */
    protected $EmailData = null;

    /**
     * @var string $FirstName
     */
    protected $FirstName = null;

    /**
     * @var boolean $IsCompany
     */
    protected $IsCompany = null;

    /**
     * @var \DateTime $LastModificationDate
     */
    protected $LastModificationDate = null;

    /**
     * @var string $LastName
     */
    protected $LastName = null;

    /**
     * @var string $MunicipalRegistration
     */
    protected $MunicipalRegistration = null;

    /**
     * @var string $OriginCode
     */
    protected $OriginCode = null;

    /**
     * @var PhoneDataType $PhoneData
     */
    protected $PhoneData = null;

    /**
     * @var string $PriceListCode
     */
    protected $PriceListCode = null;

    /**
     * @var string $RegionalRegistration
     */
    protected $RegionalRegistration = null;

    /**
     * @var string $RiskLevel
     */
    protected $RiskLevel = null;

    /**
     * @var string $SalesPerson2Id
     */
    protected $SalesPerson2Id = null;

    /**
     * @var string $SalesPerson3Id
     */
    protected $SalesPerson3Id = null;

    /**
     * @var string $SalesPersonId
     */
    protected $SalesPersonId = null;

    /**
     * @var string $TitleId
     */
    protected $TitleId = null;

    /**
     * @var ArrayOfUserDefinedBoolean $UserDefinedBooleans
     */
    protected $UserDefinedBooleans = null;

    /**
     * @var UserDefinedDataType $UserDefinedData
     */
    protected $UserDefinedData = null;

    /**
     * @var ArrayOfUserDefinedDate $UserDefinedDates
     */
    protected $UserDefinedDates = null;

    /**
     * @var ArrayOfUserDefinedText $UserDefinedTexts
     */
    protected $UserDefinedTexts = null;

    /**
     * @var ArrayOfUserDefinedValue $UserDefinedValues
     */
    protected $UserDefinedValues = null;

    /**
     * @var string $UsualStoreId
     */
    protected $UsualStoreId = null;


    public function __construct()
    {

    }

    /**
     * @return string
     */
    public function getActivitySectorCode()
    {
        return $this->ActivitySectorCode;
    }

    /**
     * @param string $ActivitySectorCode
     *
     * @return CustomerDataBase
     */
    public function setActivitySectorCode($ActivitySectorCode)
    {
        $this->ActivitySectorCode = $ActivitySectorCode;
        return $this;
    }

    /**
     * @return AddressDataType
     */
    public function getAddressData()
    {
        return $this->AddressData;
    }

    /**
     * @param AddressDataType $AddressData
     *
     * @return CustomerDataBase
     */
    public function setAddressData($AddressData)
    {
        $this->AddressData = $AddressData;
        return $this;
    }

    /**
     * @return string
     */
    public function getAlternateFirstName()
    {
        return $this->AlternateFirstName;
    }

    /**
     * @param string $AlternateFirstName
     *
     * @return CustomerDataBase
     */
    public function setAlternateFirstName($AlternateFirstName)
    {
        $this->AlternateFirstName = $AlternateFirstName;
        return $this;
    }

    /**
     * @return string
     */
    public function getAlternateLastName()
    {
        return $this->AlternateLastName;
    }

    /**
     * @param string $AlternateLastName
     *
     * @return CustomerDataBase
     */
    public function setAlternateLastName($AlternateLastName)
    {
        $this->AlternateLastName = $AlternateLastName;
        return $this;
    }

    /**
     * @return string
     */
    public function getBusinessAreaCode()
    {
        return $this->BusinessAreaCode;
    }

    /**
     * @param string $BusinessAreaCode
     *
     * @return CustomerDataBase
     */
    public function setBusinessAreaCode($BusinessAreaCode)
    {
        $this->BusinessAreaCode = $BusinessAreaCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getCpfCnpjCode()
    {
        return $this->CpfCnpjCode;
    }

    /**
     * @param string $CpfCnpjCode
     *
     * @return CustomerDataBase
     */
    public function setCpfCnpjCode($CpfCnpjCode)
    {
        $this->CpfCnpjCode = $CpfCnpjCode;
        return $this;
    }

    /**
     * @return EmailDataType
     */
    public function getEmailData()
    {
        return $this->EmailData;
    }

    /**
     * @param EmailDataType $EmailData
     *
     * @return CustomerDataBase
     */
    public function setEmailData($EmailData)
    {
        $this->EmailData = $EmailData;
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
     *
     * @return CustomerDataBase
     */
    public function setFirstName($FirstName)
    {
        $this->FirstName = $FirstName;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsCompany()
    {
        return $this->IsCompany;
    }

    /**
     * @param boolean $IsCompany
     *
     * @return CustomerDataBase
     */
    public function setIsCompany($IsCompany)
    {
        $this->IsCompany = $IsCompany;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastModificationDate()
    {
        if ($this->LastModificationDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->LastModificationDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $LastModificationDate
     *
     * @return CustomerDataBase
     */
    public function setLastModificationDate(\DateTime $LastModificationDate = null)
    {
        if ($LastModificationDate == null) {
            $this->LastModificationDate = null;
        } else {
            $this->LastModificationDate = $LastModificationDate->format(\DateTime::ATOM);
        }
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
     *
     * @return CustomerDataBase
     */
    public function setLastName($LastName)
    {
        $this->LastName = $LastName;
        return $this;
    }

    /**
     * @return string
     */
    public function getMunicipalRegistration()
    {
        return $this->MunicipalRegistration;
    }

    /**
     * @param string $MunicipalRegistration
     *
     * @return CustomerDataBase
     */
    public function setMunicipalRegistration($MunicipalRegistration)
    {
        $this->MunicipalRegistration = $MunicipalRegistration;
        return $this;
    }

    /**
     * @return string
     */
    public function getOriginCode()
    {
        return $this->OriginCode;
    }

    /**
     * @param string $OriginCode
     *
     * @return CustomerDataBase
     */
    public function setOriginCode($OriginCode)
    {
        $this->OriginCode = $OriginCode;
        return $this;
    }

    /**
     * @return PhoneDataType
     */
    public function getPhoneData()
    {
        return $this->PhoneData;
    }

    /**
     * @param PhoneDataType $PhoneData
     *
     * @return CustomerDataBase
     */
    public function setPhoneData($PhoneData)
    {
        $this->PhoneData = $PhoneData;
        return $this;
    }

    /**
     * @return string
     */
    public function getPriceListCode()
    {
        return $this->PriceListCode;
    }

    /**
     * @param string $PriceListCode
     *
     * @return CustomerDataBase
     */
    public function setPriceListCode($PriceListCode)
    {
        $this->PriceListCode = $PriceListCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getRegionalRegistration()
    {
        return $this->RegionalRegistration;
    }

    /**
     * @param string $RegionalRegistration
     *
     * @return CustomerDataBase
     */
    public function setRegionalRegistration($RegionalRegistration)
    {
        $this->RegionalRegistration = $RegionalRegistration;
        return $this;
    }

    /**
     * @return string
     */
    public function getRiskLevel()
    {
        return $this->RiskLevel;
    }

    /**
     * @param string $RiskLevel
     *
     * @return CustomerDataBase
     */
    public function setRiskLevel($RiskLevel)
    {
        $this->RiskLevel = $RiskLevel;
        return $this;
    }

    /**
     * @return string
     */
    public function getSalesPerson2Id()
    {
        return $this->SalesPerson2Id;
    }

    /**
     * @param string $SalesPerson2Id
     *
     * @return CustomerDataBase
     */
    public function setSalesPerson2Id($SalesPerson2Id)
    {
        $this->SalesPerson2Id = $SalesPerson2Id;
        return $this;
    }

    /**
     * @return string
     */
    public function getSalesPerson3Id()
    {
        return $this->SalesPerson3Id;
    }

    /**
     * @param string $SalesPerson3Id
     *
     * @return CustomerDataBase
     */
    public function setSalesPerson3Id($SalesPerson3Id)
    {
        $this->SalesPerson3Id = $SalesPerson3Id;
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
     * @return CustomerDataBase
     */
    public function setSalesPersonId($SalesPersonId)
    {
        $this->SalesPersonId = $SalesPersonId;
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
     *
     * @return CustomerDataBase
     */
    public function setTitleId($TitleId)
    {
        $this->TitleId = $TitleId;
        return $this;
    }

    /**
     * @return ArrayOfUserDefinedBoolean
     */
    public function getUserDefinedBooleans()
    {
        return $this->UserDefinedBooleans;
    }

    /**
     * @param ArrayOfUserDefinedBoolean $UserDefinedBooleans
     *
     * @return CustomerDataBase
     */
    public function setUserDefinedBooleans($UserDefinedBooleans)
    {
        $this->UserDefinedBooleans = $UserDefinedBooleans;
        return $this;
    }

    /**
     * @return UserDefinedDataType
     */
    public function getUserDefinedData()
    {
        return $this->UserDefinedData;
    }

    /**
     * @param UserDefinedDataType $UserDefinedData
     *
     * @return CustomerDataBase
     */
    public function setUserDefinedData($UserDefinedData)
    {
        $this->UserDefinedData = $UserDefinedData;
        return $this;
    }

    /**
     * @return ArrayOfUserDefinedDate
     */
    public function getUserDefinedDates()
    {
        return $this->UserDefinedDates;
    }

    /**
     * @param ArrayOfUserDefinedDate $UserDefinedDates
     *
     * @return CustomerDataBase
     */
    public function setUserDefinedDates($UserDefinedDates)
    {
        $this->UserDefinedDates = $UserDefinedDates;
        return $this;
    }

    /**
     * @return ArrayOfUserDefinedText
     */
    public function getUserDefinedTexts()
    {
        return $this->UserDefinedTexts;
    }

    /**
     * @param ArrayOfUserDefinedText $UserDefinedTexts
     *
     * @return CustomerDataBase
     */
    public function setUserDefinedTexts($UserDefinedTexts)
    {
        $this->UserDefinedTexts = $UserDefinedTexts;
        return $this;
    }

    /**
     * @return ArrayOfUserDefinedValue
     */
    public function getUserDefinedValues()
    {
        return $this->UserDefinedValues;
    }

    /**
     * @param ArrayOfUserDefinedValue $UserDefinedValues
     *
     * @return CustomerDataBase
     */
    public function setUserDefinedValues($UserDefinedValues)
    {
        $this->UserDefinedValues = $UserDefinedValues;
        return $this;
    }

    /**
     * @return string
     */
    public function getUsualStoreId()
    {
        return $this->UsualStoreId;
    }

    /**
     * @param string $UsualStoreId
     *
     * @return CustomerDataBase
     */
    public function setUsualStoreId($UsualStoreId)
    {
        $this->UsualStoreId = $UsualStoreId;
        return $this;
    }

}
