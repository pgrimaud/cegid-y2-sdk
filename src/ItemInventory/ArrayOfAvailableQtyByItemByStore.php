<?php

namespace Y2\ItemInventory;

class ArrayOfAvailableQtyByItemByStore implements \ArrayAccess, \Iterator, \Countable
{
    /**
     * @var AvailableQtyByItemByStore[] $AvailableQtyByItemByStore
     */
    protected $AvailableQtyByItemByStore = null;

    public function __construct()
    {

    }

    /**
     * @return AvailableQtyByItemByStore[]
     */
    public function getAvailableQtyByItemByStore()
    {
        return $this->AvailableQtyByItemByStore;
    }

    /**
     * @param AvailableQtyByItemByStore[] $AvailableQtyByItemByStore
     *
     * @return ArrayOfAvailableQtyByItemByStore
     */
    public function setAvailableQtyByItemByStore(array $AvailableQtyByItemByStore = null)
    {
        $this->AvailableQtyByItemByStore = $AvailableQtyByItemByStore;
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
        return isset($this->AvailableQtyByItemByStore[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     *
     * @return AvailableQtyByItemByStore
     */
    public function offsetGet($offset)
    {
        return $this->AvailableQtyByItemByStore[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed                     $offset The offset to assign the value to
     * @param AvailableQtyByItemByStore $value The value to set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            $this->AvailableQtyByItemByStore[] = $value;
        } else {
            $this->AvailableQtyByItemByStore[$offset] = $value;
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
        unset($this->AvailableQtyByItemByStore[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return AvailableQtyByItemByStore Return the current element
     */
    public function current()
    {
        return current($this->AvailableQtyByItemByStore);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->AvailableQtyByItemByStore);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->AvailableQtyByItemByStore);
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
        reset($this->AvailableQtyByItemByStore);
    }

    /**
     * Countable implementation
     *
     * @return AvailableQtyByItemByStore Return count of elements
     */
    public function count()
    {
        return count($this->AvailableQtyByItemByStore);
    }

}
