<?php

namespace Y2\SaleDocument;

class ArrayOfUpdate_Payment implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Update_Payment[] $Update_Payment
     */
    protected $Update_Payment = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Update_Payment[]
     */
    public function getUpdate_Payment()
    {
      return $this->Update_Payment;
    }

    /**
     * @param Update_Payment[] $Update_Payment
     * @return ArrayOfUpdate_Payment
     */
    public function setUpdate_Payment(array $Update_Payment = null)
    {
      $this->Update_Payment = $Update_Payment;
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
      return isset($this->Update_Payment[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Update_Payment
     */
    public function offsetGet($offset)
    {
      return $this->Update_Payment[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Update_Payment $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Update_Payment[] = $value;
      } else {
        $this->Update_Payment[$offset] = $value;
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
      unset($this->Update_Payment[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Update_Payment Return the current element
     */
    public function current()
    {
      return current($this->Update_Payment);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Update_Payment);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Update_Payment);
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
      reset($this->Update_Payment);
    }

    /**
     * Countable implementation
     *
     * @return Update_Payment Return count of elements
     */
    public function count()
    {
      return count($this->Update_Payment);
    }

}
