<?php

namespace Y2\SaleDocument;

class ArrayOfCreate_Line implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Create_Line[] $Create_Line
     */
    protected $Create_Line = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Create_Line[]
     */
    public function getCreate_Line()
    {
      return $this->Create_Line;
    }

    /**
     * @param Create_Line[] $Create_Line
     * @return ArrayOfCreate_Line
     */
    public function setCreate_Line(array $Create_Line = null)
    {
      $this->Create_Line = $Create_Line;
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
      return isset($this->Create_Line[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Create_Line
     */
    public function offsetGet($offset)
    {
      return $this->Create_Line[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Create_Line $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Create_Line[] = $value;
      } else {
        $this->Create_Line[$offset] = $value;
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
      unset($this->Create_Line[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Create_Line Return the current element
     */
    public function current()
    {
      return current($this->Create_Line);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Create_Line);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Create_Line);
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
      reset($this->Create_Line);
    }

    /**
     * Countable implementation
     *
     * @return Create_Line Return count of elements
     */
    public function count()
    {
      return count($this->Create_Line);
    }

}
