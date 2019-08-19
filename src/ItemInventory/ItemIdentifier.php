<?php

namespace Y2\ItemInventory;

class ItemIdentifier
{
    /**
     * @var string $Id
     */
    protected $Id = null;

    /**
     * @var string $Reference
     */
    protected $Reference = null;

    public function __construct()
    {

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
     * @return ItemIdentifier
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return string
     */
    public function getReference()
    {
        return $this->Reference;
    }

    /**
     * @param string $Reference
     * @return ItemIdentifier
     */
    public function setReference($Reference)
    {
        $this->Reference = $Reference;
        return $this;
    }

}
