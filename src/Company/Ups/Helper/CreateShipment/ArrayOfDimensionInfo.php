<?php
namespace Teknomavi\Kargo\Company\Ups\Helper\CreateShipment;

class ArrayOfDimensionInfo implements \ArrayAccess, \Iterator, \Countable
{
    /**
     * @var DimensionInfo[]
     */
    protected $DimensionInfo = null;

    public function __construct()
    {
    }

    /**
     * @return DimensionInfo[]
     */
    public function getDimensionInfo()
    {
        return $this->DimensionInfo;
    }

    /**
     * @param DimensionInfo[] $DimensionInfo
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ArrayOfDimensionInfo
     */
    public function setDimensionInfo(array $DimensionInfo = null)
    {
        $this->DimensionInfo = $DimensionInfo;

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
        return isset($this->DimensionInfo[$offset]);
    }

    /**
     * ArrayAccess implementation.
     *
     * @param mixed $offset The offset to retrieve
     *
     * @return DimensionInfo
     */
    public function offsetGet($offset)
    {
        return $this->DimensionInfo[$offset];
    }

    /**
     * ArrayAccess implementation.
     *
     * @param mixed         $offset The offset to assign the value to
     * @param DimensionInfo $value  The value to set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            $this->DimensionInfo[] = $value;
        } else {
            $this->DimensionInfo[$offset] = $value;
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
        unset($this->DimensionInfo[$offset]);
    }

    /**
     * Iterator implementation.
     *
     * @return DimensionInfo Return the current element
     */
    public function current()
    {
        return current($this->DimensionInfo);
    }

    /**
     * Iterator implementation
     * Move forward to next element.
     *
     * @return void
     */
    public function next()
    {
        next($this->DimensionInfo);
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
        return key($this->DimensionInfo);
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element.
     *
     * @return void
     */
    public function rewind()
    {
        reset($this->DimensionInfo);
    }

    /**
     * Countable implementation.
     *
     * @return DimensionInfo Return count of elements
     */
    public function count()
    {
        return count($this->DimensionInfo);
    }
}
