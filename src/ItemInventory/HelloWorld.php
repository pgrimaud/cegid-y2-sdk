<?php

namespace Y2\ItemInventory;

class HelloWorld
{
    /**
     * @var string $text
     */
    protected $text = null;

    /**
     * @var RetailContext $clientContext
     */
    protected $clientContext = null;

    /**
     * @param string $text
     * @param RetailContext $clientContext
     */
    public function __construct($text, $clientContext)
    {
        $this->text          = $text;
        $this->clientContext = $clientContext;
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param string $text
     * @return HelloWorld
     */
    public function setText($text)
    {
        $this->text = $text;
        return $this;
    }

    /**
     * @return RetailContext
     */
    public function getClientContext()
    {
        return $this->clientContext;
    }

    /**
     * @param RetailContext $clientContext
     * @return HelloWorld
     */
    public function setClientContext($clientContext)
    {
        $this->clientContext = $clientContext;
        return $this;
    }

}
