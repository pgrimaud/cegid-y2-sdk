<?php

namespace Y2\SaleDocument;

class ArrayOfGet_Header implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Get_Header[] $Get_Header
     */
    protected $Get_Header = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Get_Header[]
     */
    public function getGet_Header()
    {
      return $this->Get_Header;
    }

    /**
     * @param Get_Header[] $Get_Header
     * @return ArrayOfGet_Header
     */
    public function setGet_Header(array $Get_Header = null)
    {
      $this->Get_Header = $Get_Header;
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
      return isset($this->Get_Header[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Get_Header
     */
    public function offsetGet($offset)
    {
      return $this->Get_Header[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Get_Header $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Get_Header[] = $value;
      } else {
        $this->Get_Header[$offset] = $value;
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
      unset($this->Get_Header[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Get_Header Return the current element
     */
    public function current()
    {
      return current($this->Get_Header);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Get_Header);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Get_Header);
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
      reset($this->Get_Header);
    }

    /**
     * Countable implementation
     *
     * @return Get_Header Return count of elements
     */
    public function count()
    {
      return count($this->Get_Header);
    }

}
