<?php

namespace Y2\SaleDocument;

class ArrayOfCreate_ShippingTax implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Create_ShippingTax[] $Create_ShippingTax
     */
    protected $Create_ShippingTax = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Create_ShippingTax[]
     */
    public function getCreate_ShippingTax()
    {
      return $this->Create_ShippingTax;
    }

    /**
     * @param Create_ShippingTax[] $Create_ShippingTax
     * @return ArrayOfCreate_ShippingTax
     */
    public function setCreate_ShippingTax(array $Create_ShippingTax = null)
    {
      $this->Create_ShippingTax = $Create_ShippingTax;
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
      return isset($this->Create_ShippingTax[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Create_ShippingTax
     */
    public function offsetGet($offset)
    {
      return $this->Create_ShippingTax[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Create_ShippingTax $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Create_ShippingTax[] = $value;
      } else {
        $this->Create_ShippingTax[$offset] = $value;
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
      unset($this->Create_ShippingTax[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Create_ShippingTax Return the current element
     */
    public function current()
    {
      return current($this->Create_ShippingTax);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Create_ShippingTax);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Create_ShippingTax);
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
      reset($this->Create_ShippingTax);
    }

    /**
     * Countable implementation
     *
     * @return Create_ShippingTax Return count of elements
     */
    public function count()
    {
      return count($this->Create_ShippingTax);
    }

}
