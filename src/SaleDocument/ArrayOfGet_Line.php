<?php

namespace Y2\SaleDocument;

class ArrayOfGet_Line implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Get_Line[] $Get_Line
     */
    protected $Get_Line = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Get_Line[]
     */
    public function getGet_Line()
    {
      return $this->Get_Line;
    }

    /**
     * @param Get_Line[] $Get_Line
     * @return ArrayOfGet_Line
     */
    public function setGet_Line(array $Get_Line = null)
    {
      $this->Get_Line = $Get_Line;
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
      return isset($this->Get_Line[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Get_Line
     */
    public function offsetGet($offset)
    {
      return $this->Get_Line[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Get_Line $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Get_Line[] = $value;
      } else {
        $this->Get_Line[$offset] = $value;
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
      unset($this->Get_Line[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Get_Line Return the current element
     */
    public function current()
    {
      return current($this->Get_Line);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Get_Line);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Get_Line);
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
      reset($this->Get_Line);
    }

    /**
     * Countable implementation
     *
     * @return Get_Line Return count of elements
     */
    public function count()
    {
      return count($this->Get_Line);
    }

}
