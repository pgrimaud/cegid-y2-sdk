<?php

namespace Y2\Customer;

class CustomerSearchDataType extends CustomerDataBase
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
     * @var boolean $Closed
     */
    protected $Closed = null;

    /**
     * @var string $CompanyIdNumber
     */
    protected $CompanyIdNumber = null;

    /**
     * @var string $CreationStoreId
     */
    protected $CreationStoreId = null;

    /**
     * @var string $CustomerId
     */
    protected $CustomerId = null;

    /**
     * @var string $CustomerReference
     */
    protected $CustomerReference = null;

    /**
     * @var boolean $DirectMail
     */
    protected $DirectMail = null;

    /**
     * @var string $FiscalId
     */
    protected $FiscalId = null;

    /**
     * @var string $InvoiceCustomerId
     */
    protected $InvoiceCustomerId = null;

    /**
     * @var boolean $IsCustomer
     */
    protected $IsCustomer = null;

    /**
     * @var boolean $IsProspect
     */
    protected $IsProspect = null;

    /**
     * @var string $ItalianFiscalId
     */
    protected $ItalianFiscalId = null;

    /**
     * @var int $MaxNumberOfCustomers
     */
    protected $MaxNumberOfCustomers = null;

    /**
     * @var NationalityDataType $NationalityData
     */
    protected $NationalityData = null;

    /**
     * @var string $PassportNumber
     */
    protected $PassportNumber = null;


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
     * @return CustomerSearchDataType
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
     * @return CustomerSearchDataType
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
     * @return CustomerSearchDataType
     */
    public function setBirthDateData($BirthDateData)
    {
        $this->BirthDateData = $BirthDateData;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getClosed()
    {
        return $this->Closed;
    }

    /**
     * @param boolean $Closed
     *
     * @return CustomerSearchDataType
     */
    public function setClosed($Closed)
    {
        $this->Closed = $Closed;
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
     * @return CustomerSearchDataType
     */
    public function setCompanyIdNumber($CompanyIdNumber)
    {
        $this->CompanyIdNumber = $CompanyIdNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreationStoreId()
    {
        return $this->CreationStoreId;
    }

    /**
     * @param string $CreationStoreId
     *
     * @return CustomerSearchDataType
     */
    public function setCreationStoreId($CreationStoreId)
    {
        $this->CreationStoreId = $CreationStoreId;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerId()
    {
        return $this->CustomerId;
    }

    /**
     * @param string $CustomerId
     *
     * @return CustomerSearchDataType
     */
    public function setCustomerId($CustomerId)
    {
        $this->CustomerId = $CustomerId;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerReference()
    {
        return $this->CustomerReference;
    }

    /**
     * @param string $CustomerReference
     *
     * @return CustomerSearchDataType
     */
    public function setCustomerReference($CustomerReference)
    {
        $this->CustomerReference = $CustomerReference;
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
     * @return CustomerSearchDataType
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
     * @return CustomerSearchDataType
     */
    public function setFiscalId($FiscalId)
    {
        $this->FiscalId = $FiscalId;
        return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceCustomerId()
    {
        return $this->InvoiceCustomerId;
    }

    /**
     * @param string $InvoiceCustomerId
     *
     * @return CustomerSearchDataType
     */
    public function setInvoiceCustomerId($InvoiceCustomerId)
    {
        $this->InvoiceCustomerId = $InvoiceCustomerId;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsCustomer()
    {
        return $this->IsCustomer;
    }

    /**
     * @param boolean $IsCustomer
     *
     * @return CustomerSearchDataType
     */
    public function setIsCustomer($IsCustomer)
    {
        $this->IsCustomer = $IsCustomer;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsProspect()
    {
        return $this->IsProspect;
    }

    /**
     * @param boolean $IsProspect
     *
     * @return CustomerSearchDataType
     */
    public function setIsProspect($IsProspect)
    {
        $this->IsProspect = $IsProspect;
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
     * @return CustomerSearchDataType
     */
    public function setItalianFiscalId($ItalianFiscalId)
    {
        $this->ItalianFiscalId = $ItalianFiscalId;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaxNumberOfCustomers()
    {
        return $this->MaxNumberOfCustomers;
    }

    /**
     * @param int $MaxNumberOfCustomers
     *
     * @return CustomerSearchDataType
     */
    public function setMaxNumberOfCustomers($MaxNumberOfCustomers)
    {
        $this->MaxNumberOfCustomers = $MaxNumberOfCustomers;
        return $this;
    }

    /**
     * @return NationalityDataType
     */
    public function getNationalityData()
    {
        return $this->NationalityData;
    }

    /**
     * @param NationalityDataType $NationalityData
     *
     * @return CustomerSearchDataType
     */
    public function setNationalityData($NationalityData)
    {
        $this->NationalityData = $NationalityData;
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
     * @return CustomerSearchDataType
     */
    public function setPassportNumber($PassportNumber)
    {
        $this->PassportNumber = $PassportNumber;
        return $this;
    }

}
