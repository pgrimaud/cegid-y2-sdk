<?php

namespace Y2\Customer;

class CbpExceptionDetail extends ExceptionDetail
{
    /**
     * @var string $Id
     */
    protected $Id = null;

    /**
     * @var string $ToDo
     */
    protected $ToDo = null;

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param string $Id
     *
     * @return CbpExceptionDetail
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return string
     */
    public function getToDo()
    {
        return $this->ToDo;
    }

    /**
     * @param string $ToDo
     *
     * @return CbpExceptionDetail
     */
    public function setToDo($ToDo)
    {
        $this->ToDo = $ToDo;
        return $this;
    }

}
