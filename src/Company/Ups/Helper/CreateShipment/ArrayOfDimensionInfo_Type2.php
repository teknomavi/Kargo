<?php

namespace Teknomavi\Kargo\Company\Ups\Helper\CreateShipment;

class ArrayOfDimensionInfo_Type2 implements \ArrayAccess, \Iterator, \Countable
{
    /**
     * @var DimensionInfo_Type2[]
     */
    protected $DimensionInfo_Type2 = null;

    public function __construct()
    {
    }

    /**
     * @return DimensionInfo_Type2[]
     */
    public function getDimensionInfo_Type2()
    {
        return $this->DimensionInfo_Type2;
    }

    /**
     * @param DimensionInfo_Type2[] $DimensionInfo_Type2
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ArrayOfDimensionInfo_Type2
     */
    public function setDimensionInfo_Type2(array $DimensionInfo_Type2 = null)
    {
        $this->DimensionInfo_Type2 = $DimensionInfo_Type2;

        return $this;
    }

    /**
     * ArrayAccess implementation.
     *
     * @param mixed $offset An offset to check for
     *
     * @return bool true on success or false on failure
     */
    public function offsetExists($offset)
    {
        return isset($this->DimensionInfo_Type2[$offset]);
    }

    /**
     * ArrayAccess implementation.
     *
     * @param mixed $offset The offset to retrieve
     *
     * @return DimensionInfo_Type2
     */
    public function offsetGet($offset)
    {
        return $this->DimensionInfo_Type2[$offset];
    }

    /**
     * ArrayAccess implementation.
     *
     * @param mixed               $offset The offset to assign the value to
     * @param DimensionInfo_Type2 $value  The value to set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            $this->DimensionInfo_Type2[] = $value;
        } else {
            $this->DimensionInfo_Type2[$offset] = $value;
        }
    }

    /**
     * ArrayAccess implementation.
     *
     * @param mixed $offset The offset to unset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->DimensionInfo_Type2[$offset]);
    }

    /**
     * Iterator implementation.
     *
     * @return DimensionInfo_Type2 Return the current element
     */
    public function current()
    {
        return current($this->DimensionInfo_Type2);
    }

    /**
     * Iterator implementation
     * Move forward to next element.
     *
     * @return void
     */
    public function next()
    {
        next($this->DimensionInfo_Type2);
    }

    /**
     * Iterator implementation.
     *
     * @return bool Return the validity of the current position
     */
    public function valid()
    {
        return $this->key() !== null;
    }

    /**
     * Iterator implementation.
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->DimensionInfo_Type2);
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element.
     *
     * @return void
     */
    public function rewind()
    {
        reset($this->DimensionInfo_Type2);
    }

    /**
     * Countable implementation.
     *
     * @return DimensionInfo_Type2 Return count of elements
     */
    public function count()
    {
        return count($this->DimensionInfo_Type2);
    }
}
