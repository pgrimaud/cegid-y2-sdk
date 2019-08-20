<?php

namespace Y2\SaleDocument;

class GetByExternalReference_Reply
{

    /**
     * @var ArrayOfGet_Reply $Get_Replies
     */
    protected $Get_Replies = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfGet_Reply
     */
    public function getGet_Replies()
    {
      return $this->Get_Replies;
    }

    /**
     * @param ArrayOfGet_Reply $Get_Replies
     * @return GetByExternalReference_Reply
     */
    public function setGet_Replies($Get_Replies)
    {
      $this->Get_Replies = $Get_Replies;
      return $this;
    }

}
