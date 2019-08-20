<?php

namespace Y2\SaleDocument;

class ArrayOfGet_Reply implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Get_Reply[] $Get_Reply
     */
    protected $Get_Reply = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Get_Reply[]
     */
    public function getGet_Reply()
    {
      return $this->Get_Reply;
    }

    /**
     * @param Get_Reply[] $Get_Reply
     * @return ArrayOfGet_Reply
     */
    public function setGet_Reply(array $Get_Reply = null)
    {
      $this->Get_Reply = $Get_Reply;
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
      return isset($this->Get_Reply[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Get_Reply
     */
    public function offsetGet($offset)
    {
      return $this->Get_Reply[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Get_Reply $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Get_Reply[] = $value;
      } else {
        $this->Get_Reply[$offset] = $value;
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
      unset($this->Get_Reply[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Get_Reply Return the current element
     */
    public function current()
    {
      return current($this->Get_Reply);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Get_Reply);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Get_Reply);
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
      reset($this->Get_Reply);
    }

    /**
     * Countable implementation
     *
     * @return Get_Reply Return count of elements
     */
    public function count()
    {
      return count($this->Get_Reply);
    }

}
