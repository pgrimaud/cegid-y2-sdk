<?php

namespace Y2\SaleDocument;

class ExceptionDetail
{

    /**
     * @var string $HelpLink
     */
    protected $HelpLink = null;

    /**
     * @var ExceptionDetail $InnerException
     */
    protected $InnerException = null;

    /**
     * @var string $Message
     */
    protected $Message = null;

    /**
     * @var string $StackTrace
     */
    protected $StackTrace = null;

    /**
     * @var guid $TrackingId
     */
    protected $TrackingId = null;

    /**
     * @var string $Type
     */
    protected $Type = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getHelpLink()
    {
      return $this->HelpLink;
    }

    /**
     * @param string $HelpLink
     * @return ExceptionDetail
     */
    public function setHelpLink($HelpLink)
    {
      $this->HelpLink = $HelpLink;
      return $this;
    }

    /**
     * @return ExceptionDetail
     */
    public function getInnerException()
    {
      return $this->InnerException;
    }

    /**
     * @param ExceptionDetail $InnerException
     * @return ExceptionDetail
     */
    public function setInnerException($InnerException)
    {
      $this->InnerException = $InnerException;
      return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
      return $this->Message;
    }

    /**
     * @param string $Message
     * @return ExceptionDetail
     */
    public function setMessage($Message)
    {
      $this->Message = $Message;
      return $this;
    }

    /**
     * @return string
     */
    public function getStackTrace()
    {
      return $this->StackTrace;
    }

    /**
     * @param string $StackTrace
     * @return ExceptionDetail
     */
    public function setStackTrace($StackTrace)
    {
      $this->StackTrace = $StackTrace;
      return $this;
    }

    /**
     * @return guid
     */
    public function getTrackingId()
    {
      return $this->TrackingId;
    }

    /**
     * @param guid $TrackingId
     * @return ExceptionDetail
     */
    public function setTrackingId($TrackingId)
    {
      $this->TrackingId = $TrackingId;
      return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param string $Type
     * @return ExceptionDetail
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
