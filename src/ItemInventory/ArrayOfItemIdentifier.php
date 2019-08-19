<?php

namespace Y2\ItemInventory;

class ArrayOfItemIdentifier implements \ArrayAccess, \Iterator, \Countable
{
    /**
     * @var ItemIdentifier[] $ItemIdentifier
     */
    protected $ItemIdentifier = null;

    public function __construct()
    {

    }

    /**
     * @return ItemIdentifier[]
     */
    public function getItemIdentifier()
    {
        return $this->ItemIdentifier;
    }

    /**
     * @param ItemIdentifier[] $ItemIdentifier
     * @return ArrayOfItemIdentifier
     */
    public function setItemIdentifier(array $ItemIdentifier = null)
    {
        $this->ItemIdentifier = $ItemIdentifier;
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
        return isset($this->ItemIdentifier[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ItemIdentifier
     */
    public function offsetGet($offset)
    {
        return $this->ItemIdentifier[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ItemIdentifier $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            $this->ItemIdentifier[] = $value;
        } else {
            $this->ItemIdentifier[$offset] = $value;
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
        unset($this->ItemIdentifier[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ItemIdentifier Return the current element
     */
    public function current()
    {
        return current($this->ItemIdentifier);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->ItemIdentifier);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->ItemIdentifier);
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
        reset($this->ItemIdentifier);
    }

    /**
     * Countable implementation
     *
     * @return ItemIdentifier Return count of elements
     */
    public function count()
    {
        return count($this->ItemIdentifier);
    }

}
