<?php

namespace Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo;

class ArrayOfPackageTransaction implements \ArrayAccess, \Iterator, \Countable
{
    /**
     * @var PackageTransaction[]
     */
    protected $PackageTransaction = null;

    public function __construct()
    {
    }

    /**
     * @return PackageTransaction[]
     */
    public function getPackageTransaction()
    {
        return $this->PackageTransaction;
    }

    /**
     * @param PackageTransaction[] $PackageTransaction
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\ArrayOfPackageTransaction
     */
    public function setPackageTransaction(array $PackageTransaction = null)
    {
        $this->PackageTransaction = $PackageTransaction;

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
        return isset($this->PackageTransaction[$offset]);
    }

    /**
     * ArrayAccess implementation.
     *
     * @param mixed $offset The offset to retrieve
     *
     * @return PackageTransaction
     */
    public function offsetGet($offset)
    {
        return $this->PackageTransaction[$offset];
    }

    /**
     * ArrayAccess implementation.
     *
     * @param mixed              $offset The offset to assign the value to
     * @param PackageTransaction $value  The value to set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            $this->PackageTransaction[] = $value;
        } else {
            $this->PackageTransaction[$offset] = $value;
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
        unset($this->PackageTransaction[$offset]);
    }

    /**
     * Iterator implementation.
     *
     * @return PackageTransaction Return the current element
     */
    public function current()
    {
        return current($this->PackageTransaction);
    }

    /**
     * Iterator implementation
     * Move forward to next element.
     *
     * @return void
     */
    public function next()
    {
        next($this->PackageTransaction);
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
        return key($this->PackageTransaction);
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element.
     *
     * @return void
     */
    public function rewind()
    {
        reset($this->PackageTransaction);
    }

    /**
     * Countable implementation.
     *
     * @return PackageTransaction Return count of elements
     */
    public function count()
    {
        return count($this->PackageTransaction);
    }
}
