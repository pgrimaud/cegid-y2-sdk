<?php

namespace Y2\ItemInventory;

class HelloWorldResponse
{
    /**
     * @var string $HelloWorldResult
     */
    protected $HelloWorldResult = null;

    /**
     * @param string $HelloWorldResult
     */
    public function __construct($HelloWorldResult)
    {
        $this->HelloWorldResult = $HelloWorldResult;
    }

    /**
     * @return string
     */
    public function getHelloWorldResult()
    {
        return $this->HelloWorldResult;
    }

    /**
     * @param string $HelloWorldResult
     * @return HelloWorldResponse
     */
    public function setHelloWorldResult($HelloWorldResult)
    {
        $this->HelloWorldResult = $HelloWorldResult;
        return $this;
    }

}
