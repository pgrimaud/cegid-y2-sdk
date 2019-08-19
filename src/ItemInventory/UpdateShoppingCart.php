<?php

namespace Y2\ItemInventory;

class UpdateShoppingCart
{
    /**
     * @var UpdateShoppingCart_Request $request
     */
    protected $request = null;

    /**
     * @var RetailContext $clientContext
     */
    protected $clientContext = null;

    /**
     * @param UpdateShoppingCart_Request $request
     * @param RetailContext $clientContext
     */
    public function __construct($request, $clientContext)
    {
        $this->request       = $request;
        $this->clientContext = $clientContext;
    }

    /**
     * @return UpdateShoppingCart_Request
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * @param UpdateShoppingCart_Request $request
     * @return UpdateShoppingCart
     */
    public function setRequest($request)
    {
        $this->request = $request;
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
     * @return UpdateShoppingCart
     */
    public function setClientContext($clientContext)
    {
        $this->clientContext = $clientContext;
        return $this;
    }

}
