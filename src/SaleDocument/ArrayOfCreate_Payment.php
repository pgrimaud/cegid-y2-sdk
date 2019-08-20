<?php

namespace Y2\SaleDocument;

class ArrayOfCreate_Payment implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Create_Payment[] $Create_Payment
     */
    protected $Create_Payment = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Create_Payment[]
     */
    public function getCreate_Payment()
    {
      return $this->Create_Payment;
    }

    /**
     * @param Create_Payment[] $Create_Payment
     * @return ArrayOfCreate_Payment
     */
    public function setCreate_Payment(array $Create_Payment = null)
    {
      $this->Create_Payment = $Create_Payment;
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
      return isset($this->Create_Payment[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Create_Payment
     */
    public function offsetGet($offset)
    {
      return $this->Create_Payment[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Create_Payment $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Create_Payment[] = $value;
      } else {
        $this->Create_Payment[$offset] = $value;
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
      unset($this->Create_Payment[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Create_Payment Return the current element
     */
    public function current()
    {
      return current($this->Create_Payment);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Create_Payment);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Create_Payment);
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
      reset($this->Create_Payment);
    }

    /**
     * Countable implementation
     *
     * @return Create_Payment Return count of elements
     */
    public function count()
    {
      return count($this->Create_Payment);
    }

}
