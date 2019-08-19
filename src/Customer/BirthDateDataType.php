<?php

namespace Y2\Customer;

class BirthDateDataType
{
    /**
     * @var int $BirthDateDay
     */
    protected $BirthDateDay = null;

    /**
     * @var int $BirthDateMonth
     */
    protected $BirthDateMonth = null;

    /**
     * @var int $BirthDateYear
     */
    protected $BirthDateYear = null;


    public function __construct()
    {

    }

    /**
     * @return int
     */
    public function getBirthDateDay()
    {
        return $this->BirthDateDay;
    }

    /**
     * @param int $BirthDateDay
     *
     * @return BirthDateDataType
     */
    public function setBirthDateDay($BirthDateDay)
    {
        $this->BirthDateDay = $BirthDateDay;
        return $this;
    }

    /**
     * @return int
     */
    public function getBirthDateMonth()
    {
        return $this->BirthDateMonth;
    }

    /**
     * @param int $BirthDateMonth
     *
     * @return BirthDateDataType
     */
    public function setBirthDateMonth($BirthDateMonth)
    {
        $this->BirthDateMonth = $BirthDateMonth;
        return $this;
    }

    /**
     * @return int
     */
    public function getBirthDateYear()
    {
        return $this->BirthDateYear;
    }

    /**
     * @param int $BirthDateYear
     *
     * @return BirthDateDataType
     */
    public function setBirthDateYear($BirthDateYear)
    {
        $this->BirthDateYear = $BirthDateYear;
        return $this;
    }

}
