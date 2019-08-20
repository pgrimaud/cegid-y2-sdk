<?php

namespace Y2\SaleDocument;

class ArrayOfUpdate_Tax implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Update_Tax[] $Update_Tax
     */
    protected $Update_Tax = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Update_Tax[]
     */
    public function getUpdate_Tax()
    {
      return $this->Update_Tax;
    }

    /**
     * @param Update_Tax[] $Update_Tax
     * @return ArrayOfUpdate_Tax
     */
    public function setUpdate_Tax(array $Update_Tax = null)
    {
      $this->Update_Tax = $Update_Tax;
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
      return isset($this->Update_Tax[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Update_Tax
     */
    public function offsetGet($offset)
    {
      return $this->Update_Tax[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Update_Tax $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Update_Tax[] = $value;
      } else {
        $this->Update_Tax[$offset] = $value;
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
      unset($this->Update_Tax[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Update_Tax Return the current element
     */
    public function current()
    {
      return current($this->Update_Tax);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Update_Tax);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Update_Tax);
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
      reset($this->Update_Tax);
    }

    /**
     * Countable implementation
     *
     * @return Update_Tax Return count of elements
     */
    public function count()
    {
      return count($this->Update_Tax);
    }

}
