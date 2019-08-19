<?php

namespace Y2\ItemInventory;

class AvailableSkuQty
{
    /**
     * @var float $AvailableQty
     */
    protected $AvailableQty = null;

    /**
     * @var string $Dimension1
     */
    protected $Dimension1 = null;

    /**
     * @var string $Dimension2
     */
    protected $Dimension2 = null;

    /**
     * @var string $Dimension3
     */
    protected $Dimension3 = null;

    /**
     * @var string $Dimension4
     */
    protected $Dimension4 = null;

    /**
     * @var string $Dimension5
     */
    protected $Dimension5 = null;

    public function __construct()
    {

    }

    /**
     * @return float
     */
    public function getAvailableQty()
    {
        return $this->AvailableQty;
    }

    /**
     * @param float $AvailableQty
     * @return AvailableSkuQty
     */
    public function setAvailableQty($AvailableQty)
    {
        $this->AvailableQty = $AvailableQty;
        return $this;
    }

    /**
     * @return string
     */
    public function getDimension1()
    {
        return $this->Dimension1;
    }

    /**
     * @param string $Dimension1
     * @return AvailableSkuQty
     */
    public function setDimension1($Dimension1)
    {
        $this->Dimension1 = $Dimension1;
        return $this;
    }

    /**
     * @return string
     */
    public function getDimension2()
    {
        return $this->Dimension2;
    }

    /**
     * @param string $Dimension2
     * @return AvailableSkuQty
     */
    public function setDimension2($Dimension2)
    {
        $this->Dimension2 = $Dimension2;
        return $this;
    }

    /**
     * @return string
     */
    public function getDimension3()
    {
        return $this->Dimension3;
    }

    /**
     * @param string $Dimension3
     * @return AvailableSkuQty
     */
    public function setDimension3($Dimension3)
    {
        $this->Dimension3 = $Dimension3;
        return $this;
    }

    /**
     * @return string
     */
    public function getDimension4()
    {
        return $this->Dimension4;
    }

    /**
     * @param string $Dimension4
     * @return AvailableSkuQty
     */
    public function setDimension4($Dimension4)
    {
        $this->Dimension4 = $Dimension4;
        return $this;
    }

    /**
     * @return string
     */
    public function getDimension5()
    {
        return $this->Dimension5;
    }

    /**
     * @param string $Dimension5
     * @return AvailableSkuQty
     */
    public function setDimension5($Dimension5)
    {
        $this->Dimension5 = $Dimension5;
        return $this;
    }

}
