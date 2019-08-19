<?php

namespace Y2\ItemInventory;

class ArrayOfAvailableSkuQty implements \ArrayAccess, \Iterator, \Countable
{
    /**
     * @var AvailableSkuQty[] $AvailableSkuQty
     */
    protected $AvailableSkuQty = null;

    public function __construct()
    {

    }

    /**
     * @return AvailableSkuQty[]
     */
    public function getAvailableSkuQty()
    {
        return $this->AvailableSkuQty;
    }

    /**
     * @param AvailableSkuQty[] $AvailableSkuQty
     * @return ArrayOfAvailableSkuQty
     */
    public function setAvailableSkuQty(array $AvailableSkuQty = null)
    {
        $this->AvailableSkuQty = $AvailableSkuQty;
        return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset)
    {
        return isset($this->AvailableSkuQty[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AvailableSkuQty
     */
    public function offsetGet($offset)
    {
        return $this->AvailableSkuQty[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AvailableSkuQty $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            $this->AvailableSkuQty[] = $value;
        } else {
            $this->AvailableSkuQty[$offset] = $value;
        }
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->AvailableSkuQty[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return AvailableSkuQty Return the current element
     */
    public function current()
    {
        return current($this->AvailableSkuQty);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->AvailableSkuQty);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->AvailableSkuQty);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid()
    {
        return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind()
    {
        reset($this->AvailableSkuQty);
    }

    /**
     * Countable implementation
     *
     * @return AvailableSkuQty Return count of elements
     */
    public function count()
    {
        return count($this->AvailableSkuQty);
    }

}
