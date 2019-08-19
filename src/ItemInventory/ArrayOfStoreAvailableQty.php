<?php

namespace Y2\ItemInventory;

class ArrayOfStoreAvailableQty implements \ArrayAccess, \Iterator, \Countable
{
    /**
     * @var StoreAvailableQty[] $StoreAvailableQty
     */
    protected $StoreAvailableQty = null;

    public function __construct()
    {

    }

    /**
     * @return StoreAvailableQty[]
     */
    public function getStoreAvailableQty()
    {
        return $this->StoreAvailableQty;
    }

    /**
     * @param StoreAvailableQty[] $StoreAvailableQty
     * @return ArrayOfStoreAvailableQty
     */
    public function setStoreAvailableQty(array $StoreAvailableQty = null)
    {
        $this->StoreAvailableQty = $StoreAvailableQty;
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
        return isset($this->StoreAvailableQty[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return StoreAvailableQty
     */
    public function offsetGet($offset)
    {
        return $this->StoreAvailableQty[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param StoreAvailableQty $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            $this->StoreAvailableQty[] = $value;
        } else {
            $this->StoreAvailableQty[$offset] = $value;
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
        unset($this->StoreAvailableQty[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return StoreAvailableQty Return the current element
     */
    public function current()
    {
        return current($this->StoreAvailableQty);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->StoreAvailableQty);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->StoreAvailableQty);
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
        reset($this->StoreAvailableQty);
    }

    /**
     * Countable implementation
     *
     * @return StoreAvailableQty Return count of elements
     */
    public function count()
    {
        return count($this->StoreAvailableQty);
    }

}
