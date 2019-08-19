<?php

namespace Y2\Customer;

class ArrayOfCustomerQueryData implements \ArrayAccess, \Iterator, \Countable
{
    /**
     * @var CustomerQueryData[] $CustomerQueryData
     */
    protected $CustomerQueryData = null;

    public function __construct()
    {

    }

    /**
     * @return CustomerQueryData[]
     */
    public function getCustomerQueryData()
    {
        return $this->CustomerQueryData;
    }

    /**
     * @param CustomerQueryData[] $CustomerQueryData
     *
     * @return ArrayOfCustomerQueryData
     */
    public function setCustomerQueryData(array $CustomerQueryData = null)
    {
        $this->CustomerQueryData = $CustomerQueryData;
        return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     *
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset)
    {
        return isset($this->CustomerQueryData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     *
     * @return CustomerQueryData
     */
    public function offsetGet($offset)
    {
        return $this->CustomerQueryData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed             $offset The offset to assign the value to
     * @param CustomerQueryData $value The value to set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            $this->CustomerQueryData[] = $value;
        } else {
            $this->CustomerQueryData[$offset] = $value;
        }
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->CustomerQueryData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CustomerQueryData Return the current element
     */
    public function current()
    {
        return current($this->CustomerQueryData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->CustomerQueryData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->CustomerQueryData);
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
        reset($this->CustomerQueryData);
    }

    /**
     * Countable implementation
     *
     * @return CustomerQueryData Return count of elements
     */
    public function count()
    {
        return count($this->CustomerQueryData);
    }

}
