<?php

namespace Y2\SaleDocument;

class ArrayOfCreate_Tax implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Create_Tax[] $Create_Tax
     */
    protected $Create_Tax = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Create_Tax[]
     */
    public function getCreate_Tax()
    {
      return $this->Create_Tax;
    }

    /**
     * @param Create_Tax[] $Create_Tax
     * @return ArrayOfCreate_Tax
     */
    public function setCreate_Tax(array $Create_Tax = null)
    {
      $this->Create_Tax = $Create_Tax;
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
      return isset($this->Create_Tax[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Create_Tax
     */
    public function offsetGet($offset)
    {
      return $this->Create_Tax[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Create_Tax $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Create_Tax[] = $value;
      } else {
        $this->Create_Tax[$offset] = $value;
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
      unset($this->Create_Tax[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Create_Tax Return the current element
     */
    public function current()
    {
      return current($this->Create_Tax);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Create_Tax);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Create_Tax);
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
      reset($this->Create_Tax);
    }

    /**
     * Countable implementation
     *
     * @return Create_Tax Return count of elements
     */
    public function count()
    {
      return count($this->Create_Tax);
    }

}
