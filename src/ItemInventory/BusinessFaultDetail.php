<?php

namespace Y2\ItemInventory;

class BusinessFaultDetail extends CbpFaultDetail
{
    /**
     * @var ArrayOfstring $MemberNames
     */
    protected $MemberNames = null;

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return ArrayOfstring
     */
    public function getMemberNames()
    {
        return $this->MemberNames;
    }

    /**
     * @param ArrayOfstring $MemberNames
     * @return BusinessFaultDetail
     */
    public function setMemberNames($MemberNames)
    {
        $this->MemberNames = $MemberNames;
        return $this;
    }

}
