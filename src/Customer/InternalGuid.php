<?php

namespace Y2\Customer;

class InternalGuid
{
    /**
     * @var boolean $CheckGuid
     */
    protected $CheckGuid = null;

    /**
     * @var guid $Guid
     */
    protected $Guid = null;

    public function __construct()
    {

    }

    /**
     * @return boolean
     */
    public function getCheckGuid()
    {
        return $this->CheckGuid;
    }

    /**
     * @param boolean $CheckGuid
     *
     * @return InternalGuid
     */
    public function setCheckGuid($CheckGuid)
    {
        $this->CheckGuid = $CheckGuid;
        return $this;
    }

    /**
     * @return guid
     */
    public function getGuid()
    {
        return $this->Guid;
    }

    /**
     * @param guid $Guid
     *
     * @return InternalGuid
     */
    public function setGuid($Guid)
    {
        $this->Guid = $Guid;
        return $this;
    }

}
