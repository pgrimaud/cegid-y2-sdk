<?php

namespace Y2\Customer;

class RetailContext
{
    /**
     * @var string $DatabaseId
     */
    protected $DatabaseId = null;

    public function __construct()
    {

    }

    /**
     * @return string
     */
    public function getDatabaseId()
    {
        return $this->DatabaseId;
    }

    /**
     * @param string $DatabaseId
     *
     * @return RetailContext
     */
    public function setDatabaseId($DatabaseId)
    {
        $this->DatabaseId = $DatabaseId;
        return $this;
    }

}
