<?php

namespace Y2\ItemInventory;

class ArrayOfAvailableQtyByStore implements \ArrayAccess, \Iterator, \Countable
{
    /**
     * @var AvailableQtyByStore[] $AvailableQtyByStore
     */
    protected $AvailableQtyByStore = null;

    public function __construct()
    {

    }

    /**
     * @return AvailableQtyByStore[]
     */
    public function getAvailableQtyByStore()
    {
        return $this->AvailableQtyByStore;
    }

    /**
     * @param AvailableQtyByStore[] $AvailableQtyByStore
     *
     * @return ArrayOfAvailableQtyByStore
     */
    public function setAvailableQtyByStore(array $AvailableQtyByStore = null)
    {
        $this->AvailableQtyByStore = $AvailableQtyByStore;
        return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     *
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset)
    {
        return isset($this->AvailableQtyByStore[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     *
     * @return AvailableQtyByStore
     */
    public function offsetGet($offset)
    {
        return $this->AvailableQtyByStore[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed               $offset The offset to assign the value to
     * @param AvailableQtyByStore $value The value to set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            $this->AvailableQtyByStore[] = $value;
        } else {
            $this->AvailableQtyByStore[$offset] = $value;
        }
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->AvailableQtyByStore[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return AvailableQtyByStore Return the current element
     */
    public function current()
    {
        return current($this->AvailableQtyByStore);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->AvailableQtyByStore);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->AvailableQtyByStore);
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
        reset($this->AvailableQtyByStore);
    }

    /**
     * Countable implementation
     *
     * @return AvailableQtyByStore Return count of elements
     */
    public function count()
    {
        return count($this->AvailableQtyByStore);
    }

}
