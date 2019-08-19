<?php

namespace Y2\ItemInventory;

class CbpFaultDetail
{
    /**
     * @var string $Cause
     */
    protected $Cause = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var string $Id
     */
    protected $Id = null;

    /**
     * @var string $Message
     */
    protected $Message = null;

    /**
     * @var string $SourceLocation
     */
    protected $SourceLocation = null;

    /**
     * @var string $ToDo
     */
    protected $ToDo = null;

    public function __construct()
    {

    }

    /**
     * @return string
     */
    public function getCause()
    {
        return $this->Cause;
    }

    /**
     * @param string $Cause
     * @return CbpFaultDetail
     */
    public function setCause($Cause)
    {
        $this->Cause = $Cause;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param string $Description
     * @return CbpFaultDetail
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;
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
     * @return CbpFaultDetail
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->Message;
    }

    /**
     * @param string $Message
     * @return CbpFaultDetail
     */
    public function setMessage($Message)
    {
        $this->Message = $Message;
        return $this;
    }

    /**
     * @return string
     */
    public function getSourceLocation()
    {
        return $this->SourceLocation;
    }

    /**
     * @param string $SourceLocation
     * @return CbpFaultDetail
     */
    public function setSourceLocation($SourceLocation)
    {
        $this->SourceLocation = $SourceLocation;
        return $this;
    }

    /**
     * @return string
     */
    public function getToDo()
    {
        return $this->ToDo;
    }

    /**
     * @param string $ToDo
     * @return CbpFaultDetail
     */
    public function setToDo($ToDo)
    {
        $this->ToDo = $ToDo;
        return $this;
    }

}
