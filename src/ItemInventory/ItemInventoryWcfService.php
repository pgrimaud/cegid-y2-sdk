<?php

namespace Y2\ItemInventory;

/**
 * [Ajouté V1105] - Contrat du Web Service pour la consultation du stock disponible pour un article dans un dépôt.
 */
class ItemInventoryWcfService extends \SoapClient
{
    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array(
        'HelloWorld'                                 => 'Y2\\ItemInventory\\HelloWorld',
        'RetailContext'                              => 'Y2\\ItemInventory\\RetailContext',
        'HelloWorldResponse'                         => 'Y2\\ItemInventory\\HelloWorldResponse',
        'GetAvailableQty'                            => 'Y2\\ItemInventory\\GetAvailableQty',
        'ItemIdentifier'                             => 'Y2\\ItemInventory\\ItemIdentifier',
        'GetAvailableQtyResponse'                    => 'Y2\\ItemInventory\\GetAvailableQtyResponse',
        'AvailableQtyReturn'                         => 'Y2\\ItemInventory\\AvailableQtyReturn',
        'GetAvailableCumulativeQtyAllStores'         => 'Y2\\ItemInventory\\GetAvailableCumulativeQtyAllStores',
        'GetAvailableCumulativeQtyAllStoresResponse' => 'Y2\\ItemInventory\\GetAvailableCumulativeQtyAllStoresResponse',
        'GetInventoryDetailByStore'                  => 'Y2\\ItemInventory\\GetInventoryDetailByStore',
        'GetInventoryDetailByStoreResponse'          => 'Y2\\ItemInventory\\GetInventoryDetailByStoreResponse',
        'ArrayOfAvailableQtyByStore'                 => 'Y2\\ItemInventory\\ArrayOfAvailableQtyByStore',
        'AvailableQtyByStore'                        => 'Y2\\ItemInventory\\AvailableQtyByStore',
        'UpdateShoppingCart'                         => 'Y2\\ItemInventory\\UpdateShoppingCart',
        'UpdateShoppingCart_Request'                 => 'Y2\\ItemInventory\\UpdateShoppingCart_Request',
        'UpdateShoppingCartResponse'                 => 'Y2\\ItemInventory\\UpdateShoppingCartResponse',
        'ResetShoppingCart'                          => 'Y2\\ItemInventory\\ResetShoppingCart',
        'ResetShoppingCart_Request'                  => 'Y2\\ItemInventory\\ResetShoppingCart_Request',
        'ResetShoppingCartResponse'                  => 'Y2\\ItemInventory\\ResetShoppingCartResponse',
        'GetListItemInventoryDetailByStore'          => 'Y2\\ItemInventory\\GetListItemInventoryDetailByStore',
        'GetListItemInventoryDetailByStore_Request'  => 'Y2\\ItemInventory\\GetListItemInventoryDetailByStore_Request',
        'ArrayOfItemIdentifier'                      => 'Y2\\ItemInventory\\ArrayOfItemIdentifier',
        'Pager'                                      => 'Y2\\ItemInventory\\Pager',
        'GetListItemInventoryDetailByStoreResponse'  => 'Y2\\ItemInventory\\GetListItemInventoryDetailByStoreResponse',
        'GetListItemInventoryDetailByStore_Reply'    => 'Y2\\ItemInventory\\GetListItemInventoryDetailByStore_Reply',
        'ArrayOfAvailableQtyByItemByStore'           => 'Y2\\ItemInventory\\ArrayOfAvailableQtyByItemByStore',
        'AvailableQtyByItemByStore'                  => 'Y2\\ItemInventory\\AvailableQtyByItemByStore',
        'ArrayOfStoreAvailableQty'                   => 'Y2\\ItemInventory\\ArrayOfStoreAvailableQty',
        'StoreAvailableQty'                          => 'Y2\\ItemInventory\\StoreAvailableQty',
        'ArrayOfAvailableSkuQty'                     => 'Y2\\ItemInventory\\ArrayOfAvailableSkuQty',
        'AvailableSkuQty'                            => 'Y2\\ItemInventory\\AvailableSkuQty',
        'CbpFaultDetail'                             => 'Y2\\ItemInventory\\CbpFaultDetail',
        'BusinessFaultDetail'                        => 'Y2\\ItemInventory\\BusinessFaultDetail',
        'ExceptionDetail'                            => 'Y2\\ItemInventory\\ExceptionDetail',
        'CbpExceptionDetail'                         => 'Y2\\ItemInventory\\CbpExceptionDetail',
        'ArrayOfstring'                              => 'Y2\\ItemInventory\\ArrayOfstring',
    );

    /**
     * @param $wsdl
     * @param array $options
     * @throws \SoapFault
     */
    public function __construct($wsdl, array $options = array())
    {
        foreach (self::$classmap as $key => $value) {
            if (!isset($options['classmap'][$key])) {
                $options['classmap'][$key] = $value;
            }
        }

        $options = array_merge(array(
            'features' => 1,
        ), $options);

        parent::__construct($wsdl, $options);
    }

    /**
     * @param HelloWorld $parameters
     * @return HelloWorldResponse
     */
    public function HelloWorld(HelloWorld $parameters)
    {
        return $this->__soapCall('HelloWorld', array($parameters));
    }

    /**
     * @param GetAvailableQty $parameters
     * @return GetAvailableQtyResponse
     */
    public function GetAvailableQty(GetAvailableQty $parameters)
    {
        return $this->__soapCall('GetAvailableQty', array($parameters));
    }

    /**
     * @param GetAvailableCumulativeQtyAllStores $parameters
     * @return GetAvailableCumulativeQtyAllStoresResponse
     */
    public function GetAvailableCumulativeQtyAllStores(GetAvailableCumulativeQtyAllStores $parameters)
    {
        return $this->__soapCall('GetAvailableCumulativeQtyAllStores', array($parameters));
    }

    /**
     * @param GetInventoryDetailByStore $parameters
     * @return GetInventoryDetailByStoreResponse
     */
    public function GetInventoryDetailByStore(GetInventoryDetailByStore $parameters)
    {
        return $this->__soapCall('GetInventoryDetailByStore', array($parameters));
    }

    /**
     * @param UpdateShoppingCart $parameters
     * @return UpdateShoppingCartResponse
     */
    public function UpdateShoppingCart(UpdateShoppingCart $parameters)
    {
        return $this->__soapCall('UpdateShoppingCart', array($parameters));
    }

    /**
     * @param ResetShoppingCart $parameters
     * @return ResetShoppingCartResponse
     */
    public function ResetShoppingCart(ResetShoppingCart $parameters)
    {
        return $this->__soapCall('ResetShoppingCart', array($parameters));
    }

    /**
     * @param GetListItemInventoryDetailByStore $parameters
     * @return GetListItemInventoryDetailByStoreResponse
     */
    public function GetListItemInventoryDetailByStore(GetListItemInventoryDetailByStore $parameters)
    {
        return $this->__soapCall('GetListItemInventoryDetailByStore', array($parameters));
    }

}
