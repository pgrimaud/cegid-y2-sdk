<?php

namespace Y2\Customer;

/**
 * Contrat du Web Service pour la gestion des clients.
 */
class CustomerWcfService extends \SoapClient
{
    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array(
        'HelloWorld'                       => 'Y2\\Customer\\HelloWorld',
        'RetailContext'                    => 'Y2\\Customer\\RetailContext',
        'HelloWorldResponse'               => 'Y2\\Customer\\HelloWorldResponse',
        'GetCustomerIdByReference'         => 'Y2\\Customer\\GetCustomerIdByReference',
        'GetCustomerIdByReferenceResponse' => 'Y2\\Customer\\GetCustomerIdByReferenceResponse',
        'GetCustomerDetail'                => 'Y2\\Customer\\GetCustomerDetail',
        'GetCustomerDetailResponse'        => 'Y2\\Customer\\GetCustomerDetailResponse',
        'CustomerQueryData'                => 'Y2\\Customer\\CustomerQueryData',
        'CustomerData'                     => 'Y2\\Customer\\CustomerData',
        'CustomerDataBase'                 => 'Y2\\Customer\\CustomerDataBase',
        'AddressDataType'                  => 'Y2\\Customer\\AddressDataType',
        'EmailDataType'                    => 'Y2\\Customer\\EmailDataType',
        'PhoneDataType'                    => 'Y2\\Customer\\PhoneDataType',
        'ArrayOfUserDefinedBoolean'        => 'Y2\\Customer\\ArrayOfUserDefinedBoolean',
        'UserDefinedBoolean'               => 'Y2\\Customer\\UserDefinedBoolean',
        'UserDefinedDataType'              => 'Y2\\Customer\\UserDefinedDataType',
        'ArrayOfUserDefinedDate'           => 'Y2\\Customer\\ArrayOfUserDefinedDate',
        'UserDefinedDate'                  => 'Y2\\Customer\\UserDefinedDate',
        'ArrayOfUserDefinedText'           => 'Y2\\Customer\\ArrayOfUserDefinedText',
        'UserDefinedText'                  => 'Y2\\Customer\\UserDefinedText',
        'ArrayOfUserDefinedValue'          => 'Y2\\Customer\\ArrayOfUserDefinedValue',
        'UserDefinedValue'                 => 'Y2\\Customer\\UserDefinedValue',
        'BirthDateDataType'                => 'Y2\\Customer\\BirthDateDataType',
        'ArrayOfUserField'                 => 'Y2\\Customer\\ArrayOfUserField',
        'UserField'                        => 'Y2\\Customer\\UserField',
        'SearchCustomerIds'                => 'Y2\\Customer\\SearchCustomerIds',
        'CustomerSearchDataType'           => 'Y2\\Customer\\CustomerSearchDataType',
        'NationalityDataType'              => 'Y2\\Customer\\NationalityDataType',
        'SearchCustomerIdsResponse'        => 'Y2\\Customer\\SearchCustomerIdsResponse',
        'ArrayOfCustomerQueryData'         => 'Y2\\Customer\\ArrayOfCustomerQueryData',
        'AddNewCustomer'                   => 'Y2\\Customer\\AddNewCustomer',
        'CustomerInsertData'               => 'Y2\\Customer\\CustomerInsertData',
        'CustomerInputData'                => 'Y2\\Customer\\CustomerInputData',
        'InternalGuid'                     => 'Y2\\Customer\\InternalGuid',
        'AddNewCustomerResponse'           => 'Y2\\Customer\\AddNewCustomerResponse',
        'UpdateCustomer'                   => 'Y2\\Customer\\UpdateCustomer',
        'UpdateCustomerResponse'           => 'Y2\\Customer\\UpdateCustomerResponse',
        'CbpFaultDetail'                   => 'Y2\\Customer\\CbpFaultDetail',
        'BusinessFaultDetail'              => 'Y2\\Customer\\BusinessFaultDetail',
        'ExceptionDetail'                  => 'Y2\\Customer\\ExceptionDetail',
        'CbpExceptionDetail'               => 'Y2\\Customer\\CbpExceptionDetail',
        'ArrayOfstring'                    => 'Y2\\Customer\\ArrayOfstring',
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
     * @param GetCustomerIdByReference $parameters
     *
     * @return GetCustomerIdByReferenceResponse
     */
    public function GetCustomerIdByReference(GetCustomerIdByReference $parameters)
    {
        return $this->__soapCall('GetCustomerIdByReference', array($parameters));
    }

    /**
     * @param GetCustomerDetail $parameters
     *
     * @return GetCustomerDetailResponse
     */
    public function GetCustomerDetail(GetCustomerDetail $parameters)
    {
        return $this->__soapCall('GetCustomerDetail', array($parameters));
    }

    /**
     * @param SearchCustomerIds $parameters
     *
     * @return SearchCustomerIdsResponse
     */
    public function SearchCustomerIds(SearchCustomerIds $parameters)
    {
        return $this->__soapCall('SearchCustomerIds', array($parameters));
    }

    /**
     * @param AddNewCustomer $parameters
     *
     * @return AddNewCustomerResponse
     */
    public function AddNewCustomer(AddNewCustomer $parameters)
    {
        return $this->__soapCall('AddNewCustomer', array($parameters));
    }

    /**
     * @param UpdateCustomer $parameters
     *
     * @return UpdateCustomerResponse
     */
    public function UpdateCustomer(UpdateCustomer $parameters)
    {
        return $this->__soapCall('UpdateCustomer', array($parameters));
    }

}
