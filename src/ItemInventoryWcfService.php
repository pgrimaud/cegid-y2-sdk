<?php

namespace Y2;

/**
 * [Ajouté V1105] - Contrat du Web Service pour la consultation du stock disponible pour un article dans un dépôt.
 */
class ItemInventoryWcfService extends \SoapClient
{
    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array(
        'HelloWorld'                                 => 'Y2\\HelloWorld',
        'RetailContext'                              => 'Y2\\RetailContext',
        'HelloWorldResponse'                         => 'Y2\\HelloWorldResponse',
        'GetAvailableQty'                            => 'Y2\\GetAvailableQty',
        'ItemIdentifier'                             => 'Y2\\ItemIdentifier',
        'GetAvailableQtyResponse'                    => 'Y2\\GetAvailableQtyResponse',
        'AvailableQtyReturn'                         => 'Y2\\AvailableQtyReturn',
        'GetAvailableCumulativeQtyAllStores'         => 'Y2\\GetAvailableCumulativeQtyAllStores',
        'GetAvailableCumulativeQtyAllStoresResponse' => 'Y2\\GetAvailableCumulativeQtyAllStoresResponse',
        'GetInventoryDetailByStore'                  => 'Y2\\GetInventoryDetailByStore',
        'GetInventoryDetailByStoreResponse'          => 'Y2\\GetInventoryDetailByStoreResponse',
        'ArrayOfAvailableQtyByStore'                 => 'Y2\\ArrayOfAvailableQtyByStore',
        'AvailableQtyByStore'                        => 'Y2\\AvailableQtyByStore',
        'UpdateShoppingCart'                         => 'Y2\\UpdateShoppingCart',
        'UpdateShoppingCart_Request'                 => 'Y2\\UpdateShoppingCart_Request',
        'UpdateShoppingCartResponse'                 => 'Y2\\UpdateShoppingCartResponse',
        'ResetShoppingCart'                          => 'Y2\\ResetShoppingCart',
        'ResetShoppingCart_Request'                  => 'Y2\\ResetShoppingCart_Request',
        'ResetShoppingCartResponse'                  => 'Y2\\ResetShoppingCartResponse',
        'GetListItemInventoryDetailByStore'          => 'Y2\\GetListItemInventoryDetailByStore',
        'GetListItemInventoryDetailByStore_Request'  => 'Y2\\GetListItemInventoryDetailByStore_Request',
        'ArrayOfItemIdentifier'                      => 'Y2\\ArrayOfItemIdentifier',
        'Pager'                                      => 'Y2\\Pager',
        'GetListItemInventoryDetailByStoreResponse'  => 'Y2\\GetListItemInventoryDetailByStoreResponse',
        'GetListItemInventoryDetailByStore_Reply'    => 'Y2\\GetListItemInventoryDetailByStore_Reply',
        'ArrayOfAvailableQtyByItemByStore'           => 'Y2\\ArrayOfAvailableQtyByItemByStore',
        'AvailableQtyByItemByStore'                  => 'Y2\\AvailableQtyByItemByStore',
        'ArrayOfStoreAvailableQty'                   => 'Y2\\ArrayOfStoreAvailableQty',
        'StoreAvailableQty'                          => 'Y2\\StoreAvailableQty',
        'ArrayOfAvailableSkuQty'                     => 'Y2\\ArrayOfAvailableSkuQty',
        'AvailableSkuQty'                            => 'Y2\\AvailableSkuQty',
        'CbpFaultDetail'                             => 'Y2\\CbpFaultDetail',
        'BusinessFaultDetail'                        => 'Y2\\BusinessFaultDetail',
        'ExceptionDetail'                            => 'Y2\\ExceptionDetail',
        'CbpExceptionDetail'                         => 'Y2\\CbpExceptionDetail',
        'ArrayOfstring'                              => 'Y2\\ArrayOfstring',
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
