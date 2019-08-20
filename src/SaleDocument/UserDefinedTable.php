<?php

namespace Y2\SaleDocument;

class UserDefinedTable
{

    /**
     * @var UserDefinedId $Id
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
     * @return UserDefinedId
     */
    public function getId()
    {
      return $this->Id;
    }

    /**
     * @param UserDefinedId $Id
     * @return UserDefinedTable
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
     * @return UserDefinedTable
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
