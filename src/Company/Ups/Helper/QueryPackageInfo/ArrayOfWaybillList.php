<?php

namespace Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo;

class ArrayOfWaybillList implements \ArrayAccess, \Iterator, \Countable
{
    /**
     * @var WaybillList[]
     */
    protected $WaybillList = null;

    public function __construct()
    {
    }

    /**
     * @return WaybillList[]
     */
    public function getWaybillList()
    {
        return $this->WaybillList;
    }

    /**
     * @param WaybillList[] $WaybillList
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\ArrayOfWaybillList
     */
    public function setWaybillList(array $WaybillList = null)
    {
        $this->WaybillList = $WaybillList;

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
        return isset($this->WaybillList[$offset]);
    }

    /**
     * ArrayAccess implementation.
     *
     * @param mixed $offset The offset to retrieve
     *
     * @return WaybillList
     */
    public function offsetGet($offset)
    {
        return $this->WaybillList[$offset];
    }

    /**
     * ArrayAccess implementation.
     *
     * @param mixed       $offset The offset to assign the value to
     * @param WaybillList $value  The value to set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            $this->WaybillList[] = $value;
        } else {
            $this->WaybillList[$offset] = $value;
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
        unset($this->WaybillList[$offset]);
    }

    /**
     * Iterator implementation.
     *
     * @return WaybillList Return the current element
     */
    public function current()
    {
        return current($this->WaybillList);
    }

    /**
     * Iterator implementation
     * Move forward to next element.
     *
     * @return void
     */
    public function next()
    {
        next($this->WaybillList);
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
        return key($this->WaybillList);
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element.
     *
     * @return void
     */
    public function rewind()
    {
        reset($this->WaybillList);
    }

    /**
     * Countable implementation.
     *
     * @return WaybillList Return count of elements
     */
    public function count()
    {
        return count($this->WaybillList);
    }
}
