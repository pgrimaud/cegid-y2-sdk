<?php

namespace Y2\SaleDocument;

class UserDefinedTableCustomer
{

    /**
     * @var UserDefinedTableCustomerId $Id
     */
    protected $Id = null;

    /**
     * @var string $Value
     */
    protected $Value = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return UserDefinedTableCustomerId
     */
    public function getId()
    {
      return $this->Id;
    }

    /**
     * @param UserDefinedTableCustomerId $Id
     * @return UserDefinedTableCustomer
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param string $Value
     * @return UserDefinedTableCustomer
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
