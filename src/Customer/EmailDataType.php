<?php

namespace Y2\Customer;

class EmailDataType
{
    /**
     * @var string $AlternativeEmail
     */
    protected $AlternativeEmail = null;

    /**
     * @var string $Email
     */
    protected $Email = null;

    /**
     * @var boolean $EmailingAccepted
     */
    protected $EmailingAccepted = null;

    /**
     * @var boolean $SendReceiptByMail
     */
    protected $SendReceiptByMail = null;

    public function __construct()
    {

    }

    /**
     * @return string
     */
    public function getAlternativeEmail()
    {
        return $this->AlternativeEmail;
    }

    /**
     * @param string $AlternativeEmail
     *
     * @return EmailDataType
     */
    public function setAlternativeEmail($AlternativeEmail)
    {
        $this->AlternativeEmail = $AlternativeEmail;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * @param string $Email
     *
     * @return EmailDataType
     */
    public function setEmail($Email)
    {
        $this->Email = $Email;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getEmailingAccepted()
    {
        return $this->EmailingAccepted;
    }

    /**
     * @param boolean $EmailingAccepted
     *
     * @return EmailDataType
     */
    public function setEmailingAccepted($EmailingAccepted)
    {
        $this->EmailingAccepted = $EmailingAccepted;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getSendReceiptByMail()
    {
        return $this->SendReceiptByMail;
    }

    /**
     * @param boolean $SendReceiptByMail
     *
     * @return EmailDataType
     */
    public function setSendReceiptByMail($SendReceiptByMail)
    {
        $this->SendReceiptByMail = $SendReceiptByMail;
        return $this;
    }

}
