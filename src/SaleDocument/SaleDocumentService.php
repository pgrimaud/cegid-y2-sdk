<?php

namespace Y2\SaleDocument;

/**
 * [Added 2013/04 - V1102] - Contract of the Web Service for the management of purchases.
 */
class SaleDocumentService extends \SoapClient
{
    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array(
        'HelloWorld'                             => 'Y2\\SaleDocument\\HelloWorld',
        'RetailContext'                          => 'Y2\\SaleDocument\\RetailContext',
        'HelloWorldResponse'                     => 'Y2\\SaleDocument\\HelloWorldResponse',
        'GetHeaderList'                          => 'Y2\\SaleDocument\\GetHeaderList',
        'GetHeaderList_Request'                  => 'Y2\\SaleDocument\\GetHeaderList_Request',
        'ArrayOfSaleDocumentType'                => 'Y2\\SaleDocument\\ArrayOfSaleDocumentType',
        'Pager'                                  => 'Y2\\SaleDocument\\Pager',
        'GetHeaderListResponse'                  => 'Y2\\SaleDocument\\GetHeaderListResponse',
        'GetHeaderList_Reply'                    => 'Y2\\SaleDocument\\GetHeaderList_Reply',
        'ArrayOfGet_Header'                      => 'Y2\\SaleDocument\\ArrayOfGet_Header',
        'Get_Header'                             => 'Y2\\SaleDocument\\Get_Header',
        'SaleDocumentKey'                        => 'Y2\\SaleDocument\\SaleDocumentKey',
        'OmniChannel'                            => 'Y2\\SaleDocument\\OmniChannel',
        'SaleDocumentIdentifier'                 => 'Y2\\SaleDocument\\SaleDocumentIdentifier',
        'SaleDocumentReference'                  => 'Y2\\SaleDocument\\SaleDocumentReference',
        'ArrayOfUserDefinedDate'                 => 'Y2\\SaleDocument\\ArrayOfUserDefinedDate',
        'UserDefinedDate'                        => 'Y2\\SaleDocument\\UserDefinedDate',
        'ArrayOfUserDefinedTable'                => 'Y2\\SaleDocument\\ArrayOfUserDefinedTable',
        'UserDefinedTable'                       => 'Y2\\SaleDocument\\UserDefinedTable',
        'ArrayOfUserField'                       => 'Y2\\SaleDocument\\ArrayOfUserField',
        'UserField'                              => 'Y2\\SaleDocument\\UserField',
        'GetByKey'                               => 'Y2\\SaleDocument\\GetByKey',
        'GetByKey_Request'                       => 'Y2\\SaleDocument\\GetByKey_Request',
        'GetByKeyResponse'                       => 'Y2\\SaleDocument\\GetByKeyResponse',
        'Get_Reply'                              => 'Y2\\SaleDocument\\Get_Reply',
        'Address'                                => 'Y2\\SaleDocument\\Address',
        'ArrayOfGet_Line'                        => 'Y2\\SaleDocument\\ArrayOfGet_Line',
        'Get_Line'                               => 'Y2\\SaleDocument\\Get_Line',
        'GetOmniChannelLine'                     => 'Y2\\SaleDocument\\GetOmniChannelLine',
        'ArrayOfGet_Payment'                     => 'Y2\\SaleDocument\\ArrayOfGet_Payment',
        'Get_Payment'                            => 'Y2\\SaleDocument\\Get_Payment',
        'CreditCard'                             => 'Y2\\SaleDocument\\CreditCard',
        'ArrayOfGet_ShippingTax'                 => 'Y2\\SaleDocument\\ArrayOfGet_ShippingTax',
        'Get_ShippingTax'                        => 'Y2\\SaleDocument\\Get_ShippingTax',
        'GetByReference'                         => 'Y2\\SaleDocument\\GetByReference',
        'GetByReference_Request'                 => 'Y2\\SaleDocument\\GetByReference_Request',
        'GetByReferenceResponse'                 => 'Y2\\SaleDocument\\GetByReferenceResponse',
        'Create'                                 => 'Y2\\SaleDocument\\Create',
        'Create_Request'                         => 'Y2\\SaleDocument\\Create_Request',
        'Create_Header'                          => 'Y2\\SaleDocument\\Create_Header',
        'SaleDocumentLineIdentifier'             => 'Y2\\SaleDocument\\SaleDocumentLineIdentifier',
        'ArrayOfUserDefinedTableCustomer'        => 'Y2\\SaleDocument\\ArrayOfUserDefinedTableCustomer',
        'UserDefinedTableCustomer'               => 'Y2\\SaleDocument\\UserDefinedTableCustomer',
        'ArrayOfCreate_Line'                     => 'Y2\\SaleDocument\\ArrayOfCreate_Line',
        'Create_Line'                            => 'Y2\\SaleDocument\\Create_Line',
        'ItemIdentifier'                         => 'Y2\\SaleDocument\\ItemIdentifier',
        'OmniChannelLine'                        => 'Y2\\SaleDocument\\OmniChannelLine',
        'ArrayOfCreate_Tax'                      => 'Y2\\SaleDocument\\ArrayOfCreate_Tax',
        'Create_Tax'                             => 'Y2\\SaleDocument\\Create_Tax',
        'ArrayOfCreate_Payment'                  => 'Y2\\SaleDocument\\ArrayOfCreate_Payment',
        'Create_Payment'                         => 'Y2\\SaleDocument\\Create_Payment',
        'ArrayOfCreate_ShippingTax'              => 'Y2\\SaleDocument\\ArrayOfCreate_ShippingTax',
        'Create_ShippingTax'                     => 'Y2\\SaleDocument\\Create_ShippingTax',
        'CreateResponse'                         => 'Y2\\SaleDocument\\CreateResponse',
        'Create_Reply'                           => 'Y2\\SaleDocument\\Create_Reply',
        'Cancel'                                 => 'Y2\\SaleDocument\\Cancel',
        'Cancel_Request'                         => 'Y2\\SaleDocument\\Cancel_Request',
        'CancelResponse'                         => 'Y2\\SaleDocument\\CancelResponse',
        'Close'                                  => 'Y2\\SaleDocument\\Close',
        'Close_Request'                          => 'Y2\\SaleDocument\\Close_Request',
        'CloseResponse'                          => 'Y2\\SaleDocument\\CloseResponse',
        'Update'                                 => 'Y2\\SaleDocument\\Update',
        'Update_Request'                         => 'Y2\\SaleDocument\\Update_Request',
        'Update_Header'                          => 'Y2\\SaleDocument\\Update_Header',
        'ArrayOfUpdate_Line'                     => 'Y2\\SaleDocument\\ArrayOfUpdate_Line',
        'Update_Line'                            => 'Y2\\SaleDocument\\Update_Line',
        'ArrayOfUpdate_Tax'                      => 'Y2\\SaleDocument\\ArrayOfUpdate_Tax',
        'Update_Tax'                             => 'Y2\\SaleDocument\\Update_Tax',
        'ArrayOfUpdate_Payment'                  => 'Y2\\SaleDocument\\ArrayOfUpdate_Payment',
        'Update_Payment'                         => 'Y2\\SaleDocument\\Update_Payment',
        'ArrayOfUpdate_ShippingTax'              => 'Y2\\SaleDocument\\ArrayOfUpdate_ShippingTax',
        'Update_ShippingTax'                     => 'Y2\\SaleDocument\\Update_ShippingTax',
        'UpdateResponse'                         => 'Y2\\SaleDocument\\UpdateResponse',
        'UpdatePayments'                         => 'Y2\\SaleDocument\\UpdatePayments',
        'UpdatePayments_Request'                 => 'Y2\\SaleDocument\\UpdatePayments_Request',
        'UpdatePaymentsResponse'                 => 'Y2\\SaleDocument\\UpdatePaymentsResponse',
        'UpdateHeader'                           => 'Y2\\SaleDocument\\UpdateHeader',
        'UpdateHeader_Request'                   => 'Y2\\SaleDocument\\UpdateHeader_Request',
        'UpdateHeaderResponse'                   => 'Y2\\SaleDocument\\UpdateHeaderResponse',
        'GetByExternalReference'                 => 'Y2\\SaleDocument\\GetByExternalReference',
        'GetByExternalReference_Request'         => 'Y2\\SaleDocument\\GetByExternalReference_Request',
        'GetByExternalReferenceResponse'         => 'Y2\\SaleDocument\\GetByExternalReferenceResponse',
        'GetByExternalReference_Reply'           => 'Y2\\SaleDocument\\GetByExternalReference_Reply',
        'ArrayOfGet_Reply'                       => 'Y2\\SaleDocument\\ArrayOfGet_Reply',
        'Lock'                                   => 'Y2\\SaleDocument\\Lock',
        'Lock_Request'                           => 'Y2\\SaleDocument\\Lock_Request',
        'LockResponse'                           => 'Y2\\SaleDocument\\LockResponse',
        'Unlock'                                 => 'Y2\\SaleDocument\\Unlock',
        'Unlock_Request'                         => 'Y2\\SaleDocument\\Unlock_Request',
        'UnlockResponse'                         => 'Y2\\SaleDocument\\UnlockResponse',
        'CustomersReservationCreate'             => 'Y2\\SaleDocument\\CustomersReservationCreate',
        'CustomersReservationCreate_Request'     => 'Y2\\SaleDocument\\CustomersReservationCreate_Request',
        'CustomersReservationCreate_Header'      => 'Y2\\SaleDocument\\CustomersReservationCreate_Header',
        'ArrayOfCustomersReservationCreate_Line' => 'Y2\\SaleDocument\\ArrayOfCustomersReservationCreate_Line',
        'CustomersReservationCreate_Line'        => 'Y2\\SaleDocument\\CustomersReservationCreate_Line',
        'CustomersReservationCreateResponse'     => 'Y2\\SaleDocument\\CustomersReservationCreateResponse',
        'CustomersReservationCreate_Reply'       => 'Y2\\SaleDocument\\CustomersReservationCreate_Reply',
        'CbpFaultDetail'                         => 'Y2\\SaleDocument\\CbpFaultDetail',
        'BusinessFaultDetail'                    => 'Y2\\SaleDocument\\BusinessFaultDetail',
        'ExceptionDetail'                        => 'Y2\\SaleDocument\\ExceptionDetail',
        'CbpExceptionDetail'                     => 'Y2\\SaleDocument\\CbpExceptionDetail',
        'ArrayOfstring'                          => 'Y2\\SaleDocument\\ArrayOfstring',
    );

    /**
     * @param       $wsdl
     * @param array $options
     *
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
     *
     * @return HelloWorldResponse
     */
    public function HelloWorld(HelloWorld $parameters)
    {
        return $this->__soapCall('HelloWorld', array($parameters));
    }

    /**
     * @param GetHeaderList $parameters
     *
     * @return GetHeaderListResponse
     */
    public function GetHeaderList(GetHeaderList $parameters)
    {
        return $this->__soapCall('GetHeaderList', array($parameters));
    }

    /**
     * @param GetByKey $parameters
     *
     * @return GetByKeyResponse
     */
    public function GetByKey(GetByKey $parameters)
    {
        return $this->__soapCall('GetByKey', array($parameters));
    }

    /**
     * @param GetByReference $parameters
     *
     * @return GetByReferenceResponse
     */
    public function GetByReference(GetByReference $parameters)
    {
        return $this->__soapCall('GetByReference', array($parameters));
    }

    /**
     * @param Create $parameters
     *
     * @return CreateResponse
     */
    public function Create(Create $parameters)
    {
        return $this->__soapCall('Create', array($parameters));
    }

    /**
     * @param Cancel $parameters
     *
     * @return CancelResponse
     */
    public function Cancel(Cancel $parameters)
    {
        return $this->__soapCall('Cancel', array($parameters));
    }

    /**
     * @param Close $parameters
     *
     * @return CloseResponse
     */
    public function Close(Close $parameters)
    {
        return $this->__soapCall('Close', array($parameters));
    }

    /**
     * @param Update $parameters
     *
     * @return UpdateResponse
     */
    public function Update(Update $parameters)
    {
        return $this->__soapCall('Update', array($parameters));
    }

    /**
     * @param UpdatePayments $parameters
     *
     * @return UpdatePaymentsResponse
     */
    public function UpdatePayments(UpdatePayments $parameters)
    {
        return $this->__soapCall('UpdatePayments', array($parameters));
    }

    /**
     * @param UpdateHeader $parameters
     *
     * @return UpdateHeaderResponse
     */
    public function UpdateHeader(UpdateHeader $parameters)
    {
        return $this->__soapCall('UpdateHeader', array($parameters));
    }

    /**
     * @param GetByExternalReference $parameters
     *
     * @return GetByExternalReferenceResponse
     */
    public function GetByExternalReference(GetByExternalReference $parameters)
    {
        return $this->__soapCall('GetByExternalReference', array($parameters));
    }

    /**
     * @param Lock $parameters
     *
     * @return LockResponse
     */
    public function Lock(Lock $parameters)
    {
        return $this->__soapCall('Lock', array($parameters));
    }

    /**
     * @param Unlock $parameters
     *
     * @return UnlockResponse
     */
    public function Unlock(Unlock $parameters)
    {
        return $this->__soapCall('Unlock', array($parameters));
    }

    /**
     * @param CustomersReservationCreate $parameters
     *
     * @return CustomersReservationCreateResponse
     */
    public function CustomersReservationCreate(CustomersReservationCreate $parameters)
    {
        return $this->__soapCall('CustomersReservationCreate', array($parameters));
    }

}
