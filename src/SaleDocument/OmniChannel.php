<?php

namespace Y2\SaleDocument;

class OmniChannel
{

    /**
     * @var BillingStatus $BillingStatus
     */
    protected $BillingStatus = null;

    /**
     * @var \DateTime $CancelDate
     */
    protected $CancelDate = null;

    /**
     * @var string $CancelReasonId
     */
    protected $CancelReasonId = null;

    /**
     * @var CancelStatus $CancelStatus
     */
    protected $CancelStatus = null;

    /**
     * @var string $Comment
     */
    protected $Comment = null;

    /**
     * @var string $DeliveryStoreId
     */
    protected $DeliveryStoreId = null;

    /**
     * @var DeliveryType $DeliveryType
     */
    protected $DeliveryType = null;

    /**
     * @var string $DeliveryWarehouseId
     */
    protected $DeliveryWarehouseId = null;

    /**
     * @var FollowUpStatus $FollowUpStatus
     */
    protected $FollowUpStatus = null;

    /**
     * @var string $GiftMessage
     */
    protected $GiftMessage = null;

    /**
     * @var GiftMessageType $GiftMessageType
     */
    protected $GiftMessageType = null;

    /**
     * @var \DateTime $LockingDate
     */
    protected $LockingDate = null;

    /**
     * @var SaleDocumentIdentifier $OriginalDocument
     */
    protected $OriginalDocument = null;

    /**
     * @var string $PaymentMethodId
     */
    protected $PaymentMethodId = null;

    /**
     * @var PaymentStatus $PaymentStatus
     */
    protected $PaymentStatus = null;

    /**
     * @var OrderReturnStatus $ReturnStatus
     */
    protected $ReturnStatus = null;

    /**
     * @var ReturnType $ReturnType
     */
    protected $ReturnType = null;

    /**
     * @var ShippingStatus $ShippingStatus
     */
    protected $ShippingStatus = null;

    /**
     * @var string $Tracking
     */
    protected $Tracking = null;

    /**
     * @var string $Transporter
     */
    protected $Transporter = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getBillingStatus()
    {
      return $this->BillingStatus;
    }

    /**
     * @param string $BillingStatus
     * @return OmniChannel
     */
    public function setBillingStatus($BillingStatus)
    {
      $this->BillingStatus = $BillingStatus;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCancelDate()
    {
      if ($this->CancelDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CancelDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CancelDate
     * @return OmniChannel
     */
    public function setCancelDate(\DateTime $CancelDate = null)
    {
      if ($CancelDate == null) {
       $this->CancelDate = null;
      } else {
        $this->CancelDate = $CancelDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getCancelReasonId()
    {
      return $this->CancelReasonId;
    }

    /**
     * @param string $CancelReasonId
     * @return OmniChannel
     */
    public function setCancelReasonId($CancelReasonId)
    {
      $this->CancelReasonId = $CancelReasonId;
      return $this;
    }

    /**
     * @return CancelStatus
     */
    public function getCancelStatus()
    {
      return $this->CancelStatus;
    }

    /**
     * @param CancelStatus $CancelStatus
     * @return OmniChannel
     */
    public function setCancelStatus($CancelStatus)
    {
      $this->CancelStatus = $CancelStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getComment()
    {
      return $this->Comment;
    }

    /**
     * @param string $Comment
     * @return OmniChannel
     */
    public function setComment($Comment)
    {
      $this->Comment = $Comment;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryStoreId()
    {
      return $this->DeliveryStoreId;
    }

    /**
     * @param string $DeliveryStoreId
     * @return OmniChannel
     */
    public function setDeliveryStoreId($DeliveryStoreId)
    {
      $this->DeliveryStoreId = $DeliveryStoreId;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryType()
    {
      return $this->DeliveryType;
    }

    /**
     * @param string $DeliveryType
     * @return OmniChannel
     */
    public function setDeliveryType($DeliveryType)
    {
      $this->DeliveryType = $DeliveryType;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryWarehouseId()
    {
      return $this->DeliveryWarehouseId;
    }

    /**
     * @param string $DeliveryWarehouseId
     * @return OmniChannel
     */
    public function setDeliveryWarehouseId($DeliveryWarehouseId)
    {
      $this->DeliveryWarehouseId = $DeliveryWarehouseId;
      return $this;
    }

    /**
     * @return string
     */
    public function getFollowUpStatus()
    {
      return $this->FollowUpStatus;
    }

    /**
     * @param string $FollowUpStatus
     * @return OmniChannel
     */
    public function setFollowUpStatus($FollowUpStatus)
    {
      $this->FollowUpStatus = $FollowUpStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getGiftMessage()
    {
      return $this->GiftMessage;
    }

    /**
     * @param string $GiftMessage
     * @return OmniChannel
     */
    public function setGiftMessage($GiftMessage)
    {
      $this->GiftMessage = $GiftMessage;
      return $this;
    }

    /**
     * @return GiftMessageType
     */
    public function getGiftMessageType()
    {
      return $this->GiftMessageType;
    }

    /**
     * @param GiftMessageType $GiftMessageType
     * @return OmniChannel
     */
    public function setGiftMessageType($GiftMessageType)
    {
      $this->GiftMessageType = $GiftMessageType;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLockingDate()
    {
      if ($this->LockingDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LockingDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LockingDate
     * @return OmniChannel
     */
    public function setLockingDate(\DateTime $LockingDate = null)
    {
      if ($LockingDate == null) {
       $this->LockingDate = null;
      } else {
        $this->LockingDate = $LockingDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return SaleDocumentIdentifier
     */
    public function getOriginalDocument()
    {
      return $this->OriginalDocument;
    }

    /**
     * @param SaleDocumentIdentifier $OriginalDocument
     * @return OmniChannel
     */
    public function setOriginalDocument($OriginalDocument)
    {
      $this->OriginalDocument = $OriginalDocument;
      return $this;
    }

    /**
     * @return string
     */
    public function getPaymentMethodId()
    {
      return $this->PaymentMethodId;
    }

    /**
     * @param string $PaymentMethodId
     * @return OmniChannel
     */
    public function setPaymentMethodId($PaymentMethodId)
    {
      $this->PaymentMethodId = $PaymentMethodId;
      return $this;
    }

    /**
     * @return string
     */
    public function getPaymentStatus()
    {
      return $this->PaymentStatus;
    }

    /**
     * @param string $PaymentStatus
     * @return OmniChannel
     */
    public function setPaymentStatus($PaymentStatus)
    {
      $this->PaymentStatus = $PaymentStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getReturnStatus()
    {
      return $this->ReturnStatus;
    }

    /**
     * @param string $ReturnStatus
     * @return OmniChannel
     */
    public function setReturnStatus($ReturnStatus)
    {
      $this->ReturnStatus = $ReturnStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getReturnType()
    {
      return $this->ReturnType;
    }

    /**
     * @param string $ReturnType
     * @return OmniChannel
     */
    public function setReturnType($ReturnType)
    {
      $this->ReturnType = $ReturnType;
      return $this;
    }

    /**
     * @return string
     */
    public function getShippingStatus()
    {
      return $this->ShippingStatus;
    }

    /**
     * @param string $ShippingStatus
     * @return OmniChannel
     */
    public function setShippingStatus($ShippingStatus)
    {
      $this->ShippingStatus = $ShippingStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getTracking()
    {
      return $this->Tracking;
    }

    /**
     * @param string $Tracking
     * @return OmniChannel
     */
    public function setTracking($Tracking)
    {
      $this->Tracking = $Tracking;
      return $this;
    }

    /**
     * @return string
     */
    public function getTransporter()
    {
      return $this->Transporter;
    }

    /**
     * @param string $Transporter
     * @return OmniChannel
     */
    public function setTransporter($Transporter)
    {
      $this->Transporter = $Transporter;
      return $this;
    }

}
