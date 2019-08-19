<?php

namespace Y2\Customer;

class CustomerData extends CustomerDataBase
{
    /**
     * @var string $ActivityCode
     */
    protected $ActivityCode = null;

    /**
     * @var string $Barcode
     */
    protected $Barcode = null;

    /**
     * @var BirthDateDataType $BirthDateData
     */
    protected $BirthDateData = null;

    /**
     * @var string $CompanyIdNumber
     */
    protected $CompanyIdNumber = null;

    /**
     * @var string $CompanyTitleId
     */
    protected $CompanyTitleId = null;

    /**
     * @var string $CurrencyId
     */
    protected $CurrencyId = null;

    /**
     * @var boolean $DirectMail
     */
    protected $DirectMail = null;

    /**
     * @var string $FiscalId
     */
    protected $FiscalId = null;

    /**
     * @var string $ItalianFiscalId
     */
    protected $ItalianFiscalId = null;

    /**
     * @var string $LanguageId
     */
    protected $LanguageId = null;

    /**
     * @var string $LongDescription
     */
    protected $LongDescription = null;

    /**
     * @var string $NationalityId
     */
    protected $NationalityId = null;

    /**
     * @var CustomerInformationType $OptinAlternativeEmail
     */
    protected $OptinAlternativeEmail = null;

    /**
     * @var CustomerInformationType $OptinEmail
     */
    protected $OptinEmail = null;

    /**
     * @var CustomerInformationType $OptinHomePhone
     */
    protected $OptinHomePhone = null;

    /**
     * @var CustomerInformationType $OptinMobile
     */
    protected $OptinMobile = null;

    /**
     * @var CustomerInformationType $OptinOfficePhone
     */
    protected $OptinOfficePhone = null;

    /**
     * @var CustomerInformationType $OptinPostal
     */
    protected $OptinPostal = null;

    /**
     * @var string $PassportNumber
     */
    protected $PassportNumber = null;

    /**
     * @var string $Sex
     */
    protected $Sex = null;

    /**
     * @var string $ShortName
     */
    protected $ShortName = null;

    /**
     * @var ArrayOfUserField $UserFields
     */
    protected $UserFields = null;

    /**
     * @var string $VATSystem
     */
    protected $VATSystem = null;

    /**
     * @var boolean $ValidAlternativeEmail
     */
    protected $ValidAlternativeEmail = null;

    /**
     * @var boolean $ValidEmail
     */
    protected $ValidEmail = null;

    /**
     * @var boolean $ValidHomePhone
     */
    protected $ValidHomePhone = null;

    /**
     * @var boolean $ValidMobile
     */
    protected $ValidMobile = null;

    /**
     * @var boolean $ValidOfficePhone
     */
    protected $ValidOfficePhone = null;


    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return string
     */
    public function getActivityCode()
    {
        return $this->ActivityCode;
    }

    /**
     * @param string $ActivityCode
     *
     * @return CustomerData
     */
    public function setActivityCode($ActivityCode)
    {
        $this->ActivityCode = $ActivityCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getBarcode()
    {
        return $this->Barcode;
    }

    /**
     * @param string $Barcode
     *
     * @return CustomerData
     */
    public function setBarcode($Barcode)
    {
        $this->Barcode = $Barcode;
        return $this;
    }

    /**
     * @return BirthDateDataType
     */
    public function getBirthDateData()
    {
        return $this->BirthDateData;
    }

    /**
     * @param BirthDateDataType $BirthDateData
     *
     * @return CustomerData
     */
    public function setBirthDateData($BirthDateData)
    {
        $this->BirthDateData = $BirthDateData;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyIdNumber()
    {
        return $this->CompanyIdNumber;
    }

    /**
     * @param string $CompanyIdNumber
     *
     * @return CustomerData
     */
    public function setCompanyIdNumber($CompanyIdNumber)
    {
        $this->CompanyIdNumber = $CompanyIdNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyTitleId()
    {
        return $this->CompanyTitleId;
    }

    /**
     * @param string $CompanyTitleId
     *
     * @return CustomerData
     */
    public function setCompanyTitleId($CompanyTitleId)
    {
        $this->CompanyTitleId = $CompanyTitleId;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrencyId()
    {
        return $this->CurrencyId;
    }

    /**
     * @param string $CurrencyId
     *
     * @return CustomerData
     */
    public function setCurrencyId($CurrencyId)
    {
        $this->CurrencyId = $CurrencyId;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getDirectMail()
    {
        return $this->DirectMail;
    }

    /**
     * @param boolean $DirectMail
     *
     * @return CustomerData
     */
    public function setDirectMail($DirectMail)
    {
        $this->DirectMail = $DirectMail;
        return $this;
    }

    /**
     * @return string
     */
    public function getFiscalId()
    {
        return $this->FiscalId;
    }

    /**
     * @param string $FiscalId
     *
     * @return CustomerData
     */
    public function setFiscalId($FiscalId)
    {
        $this->FiscalId = $FiscalId;
        return $this;
    }

    /**
     * @return string
     */
    public function getItalianFiscalId()
    {
        return $this->ItalianFiscalId;
    }

    /**
     * @param string $ItalianFiscalId
     *
     * @return CustomerData
     */
    public function setItalianFiscalId($ItalianFiscalId)
    {
        $this->ItalianFiscalId = $ItalianFiscalId;
        return $this;
    }

    /**
     * @return string
     */
    public function getLanguageId()
    {
        return $this->LanguageId;
    }

    /**
     * @param string $LanguageId
     *
     * @return CustomerData
     */
    public function setLanguageId($LanguageId)
    {
        $this->LanguageId = $LanguageId;
        return $this;
    }

    /**
     * @return string
     */
    public function getLongDescription()
    {
        return $this->LongDescription;
    }

    /**
     * @param string $LongDescription
     *
     * @return CustomerData
     */
    public function setLongDescription($LongDescription)
    {
        $this->LongDescription = $LongDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getNationalityId()
    {
        return $this->NationalityId;
    }

    /**
     * @param string $NationalityId
     *
     * @return CustomerData
     */
    public function setNationalityId($NationalityId)
    {
        $this->NationalityId = $NationalityId;
        return $this;
    }

    /**
     * @return CustomerInformationType
     */
    public function getOptinAlternativeEmail()
    {
        return $this->OptinAlternativeEmail;
    }

    /**
     * @param CustomerInformationType $OptinAlternativeEmail
     *
     * @return CustomerData
     */
    public function setOptinAlternativeEmail($OptinAlternativeEmail)
    {
        $this->OptinAlternativeEmail = $OptinAlternativeEmail;
        return $this;
    }

    /**
     * @return CustomerInformationType
     */
    public function getOptinEmail()
    {
        return $this->OptinEmail;
    }

    /**
     * @param CustomerInformationType $OptinEmail
     *
     * @return CustomerData
     */
    public function setOptinEmail($OptinEmail)
    {
        $this->OptinEmail = $OptinEmail;
        return $this;
    }

    /**
     * @return CustomerInformationType
     */
    public function getOptinHomePhone()
    {
        return $this->OptinHomePhone;
    }

    /**
     * @param CustomerInformationType $OptinHomePhone
     *
     * @return CustomerData
     */
    public function setOptinHomePhone($OptinHomePhone)
    {
        $this->OptinHomePhone = $OptinHomePhone;
        return $this;
    }

    /**
     * @return CustomerInformationType
     */
    public function getOptinMobile()
    {
        return $this->OptinMobile;
    }

    /**
     * @param CustomerInformationType $OptinMobile
     *
     * @return CustomerData
     */
    public function setOptinMobile($OptinMobile)
    {
        $this->OptinMobile = $OptinMobile;
        return $this;
    }

    /**
     * @return CustomerInformationType
     */
    public function getOptinOfficePhone()
    {
        return $this->OptinOfficePhone;
    }

    /**
     * @param CustomerInformationType $OptinOfficePhone
     *
     * @return CustomerData
     */
    public function setOptinOfficePhone($OptinOfficePhone)
    {
        $this->OptinOfficePhone = $OptinOfficePhone;
        return $this;
    }

    /**
     * @return CustomerInformationType
     */
    public function getOptinPostal()
    {
        return $this->OptinPostal;
    }

    /**
     * @param CustomerInformationType $OptinPostal
     *
     * @return CustomerData
     */
    public function setOptinPostal($OptinPostal)
    {
        $this->OptinPostal = $OptinPostal;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassportNumber()
    {
        return $this->PassportNumber;
    }

    /**
     * @param string $PassportNumber
     *
     * @return CustomerData
     */
    public function setPassportNumber($PassportNumber)
    {
        $this->PassportNumber = $PassportNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getSex()
    {
        return $this->Sex;
    }

    /**
     * @param string $Sex
     *
     * @return CustomerData
     */
    public function setSex($Sex)
    {
        $this->Sex = $Sex;
        return $this;
    }

    /**
     * @return string
     */
    public function getShortName()
    {
        return $this->ShortName;
    }

    /**
     * @param string $ShortName
     *
     * @return CustomerData
     */
    public function setShortName($ShortName)
    {
        $this->ShortName = $ShortName;
        return $this;
    }

    /**
     * @return ArrayOfUserField
     */
    public function getUserFields()
    {
        return $this->UserFields;
    }

    /**
     * @param ArrayOfUserField $UserFields
     *
     * @return CustomerData
     */
    public function setUserFields($UserFields)
    {
        $this->UserFields = $UserFields;
        return $this;
    }

    /**
     * @return string
     */
    public function getVATSystem()
    {
        return $this->VATSystem;
    }

    /**
     * @param string $VATSystem
     *
     * @return CustomerData
     */
    public function setVATSystem($VATSystem)
    {
        $this->VATSystem = $VATSystem;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getValidAlternativeEmail()
    {
        return $this->ValidAlternativeEmail;
    }

    /**
     * @param boolean $ValidAlternativeEmail
     *
     * @return CustomerData
     */
    public function setValidAlternativeEmail($ValidAlternativeEmail)
    {
        $this->ValidAlternativeEmail = $ValidAlternativeEmail;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getValidEmail()
    {
        return $this->ValidEmail;
    }

    /**
     * @param boolean $ValidEmail
     *
     * @return CustomerData
     */
    public function setValidEmail($ValidEmail)
    {
        $this->ValidEmail = $ValidEmail;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getValidHomePhone()
    {
        return $this->ValidHomePhone;
    }

    /**
     * @param boolean $ValidHomePhone
     *
     * @return CustomerData
     */
    public function setValidHomePhone($ValidHomePhone)
    {
        $this->ValidHomePhone = $ValidHomePhone;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getValidMobile()
    {
        return $this->ValidMobile;
    }

    /**
     * @param boolean $ValidMobile
     *
     * @return CustomerData
     */
    public function setValidMobile($ValidMobile)
    {
        $this->ValidMobile = $ValidMobile;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getValidOfficePhone()
    {
        return $this->ValidOfficePhone;
    }

    /**
     * @param boolean $ValidOfficePhone
     *
     * @return CustomerData
     */
    public function setValidOfficePhone($ValidOfficePhone)
    {
        $this->ValidOfficePhone = $ValidOfficePhone;
        return $this;
    }

}
