<?php

namespace Y2\Customer;

class ArrayOfUserDefinedValue implements \ArrayAccess, \Iterator, \Countable
{
    /**
     * @var UserDefinedValue[] $UserDefinedValue
     */
    protected $UserDefinedValue = null;

    public function __construct()
    {

    }

    /**
     * @return UserDefinedValue[]
     */
    public function getUserDefinedValue()
    {
        return $this->UserDefinedValue;
    }

    /**
     * @param UserDefinedValue[] $UserDefinedValue
     *
     * @return ArrayOfUserDefinedValue
     */
    public function setUserDefinedValue(array $UserDefinedValue = null)
    {
        $this->UserDefinedValue = $UserDefinedValue;
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
        return isset($this->UserDefinedValue[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     *
     * @return UserDefinedValue
     */
    public function offsetGet($offset)
    {
        return $this->UserDefinedValue[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed            $offset The offset to assign the value to
     * @param UserDefinedValue $value The value to set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            $this->UserDefinedValue[] = $value;
        } else {
            $this->UserDefinedValue[$offset] = $value;
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
        unset($this->UserDefinedValue[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return UserDefinedValue Return the current element
     */
    public function current()
    {
        return current($this->UserDefinedValue);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->UserDefinedValue);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->UserDefinedValue);
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
        reset($this->UserDefinedValue);
    }

    /**
     * Countable implementation
     *
     * @return UserDefinedValue Return count of elements
     */
    public function count()
    {
        return count($this->UserDefinedValue);
    }

}
