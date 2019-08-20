<?php

namespace Y2\SaleDocument;

class ArrayOfGet_ShippingTax implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Get_ShippingTax[] $Get_ShippingTax
     */
    protected $Get_ShippingTax = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Get_ShippingTax[]
     */
    public function getGet_ShippingTax()
    {
      return $this->Get_ShippingTax;
    }

    /**
     * @param Get_ShippingTax[] $Get_ShippingTax
     * @return ArrayOfGet_ShippingTax
     */
    public function setGet_ShippingTax(array $Get_ShippingTax = null)
    {
      $this->Get_ShippingTax = $Get_ShippingTax;
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
      return isset($this->Get_ShippingTax[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Get_ShippingTax
     */
    public function offsetGet($offset)
    {
      return $this->Get_ShippingTax[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Get_ShippingTax $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Get_ShippingTax[] = $value;
      } else {
        $this->Get_ShippingTax[$offset] = $value;
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
      unset($this->Get_ShippingTax[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Get_ShippingTax Return the current element
     */
    public function current()
    {
      return current($this->Get_ShippingTax);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Get_ShippingTax);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Get_ShippingTax);
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
      reset($this->Get_ShippingTax);
    }

    /**
     * Countable implementation
     *
     * @return Get_ShippingTax Return count of elements
     */
    public function count()
    {
      return count($this->Get_ShippingTax);
    }

}
