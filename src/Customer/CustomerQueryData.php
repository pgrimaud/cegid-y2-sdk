<?php

namespace Y2\Customer;

class CustomerQueryData extends CustomerData
{
    /**
     * @var boolean $Closed
     */
    protected $Closed = null;

    /**
     * @var string $CreationStoreId
     */
    protected $CreationStoreId = null;

    /**
     * @var string $CustomerId
     */
    protected $CustomerId = null;

    /**
     * @var string $InvoiceCustomerId
     */
    protected $InvoiceCustomerId = null;

    /**
     * @var boolean $IsProspect
     */
    protected $IsProspect = null;

    /**
     * @var boolean $IsVirtual
     */
    protected $IsVirtual = null;

    /**
     * @var \DateTime $LastDateUpdate
     */
    protected $LastDateUpdate = null;

    /**
     * @var string $Notepad
     */
    protected $Notepad = null;


    public function __construct()
    {
        parent::__construct();
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
     * @return CustomerQueryData
     */
    public function setClosed($Closed)
    {
        $this->Closed = $Closed;
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
     * @return CustomerQueryData
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
     * @return CustomerQueryData
     */
    public function setCustomerId($CustomerId)
    {
        $this->CustomerId = $CustomerId;
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
     * @return CustomerQueryData
     */
    public function setInvoiceCustomerId($InvoiceCustomerId)
    {
        $this->InvoiceCustomerId = $InvoiceCustomerId;
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
     * @return CustomerQueryData
     */
    public function setIsProspect($IsProspect)
    {
        $this->IsProspect = $IsProspect;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsVirtual()
    {
        return $this->IsVirtual;
    }

    /**
     * @param boolean $IsVirtual
     *
     * @return CustomerQueryData
     */
    public function setIsVirtual($IsVirtual)
    {
        $this->IsVirtual = $IsVirtual;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastDateUpdate()
    {
        if ($this->LastDateUpdate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->LastDateUpdate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $LastDateUpdate
     *
     * @return CustomerQueryData
     */
    public function setLastDateUpdate(\DateTime $LastDateUpdate = null)
    {
        if ($LastDateUpdate == null) {
            $this->LastDateUpdate = null;
        } else {
            $this->LastDateUpdate = $LastDateUpdate->format(\DateTime::ATOM);
        }
        return $this;
    }

    /**
     * @return string
     */
    public function getNotepad()
    {
        return $this->Notepad;
    }

    /**
     * @param string $Notepad
     *
     * @return CustomerQueryData
     */
    public function setNotepad($Notepad)
    {
        $this->Notepad = $Notepad;
        return $this;
    }

}
