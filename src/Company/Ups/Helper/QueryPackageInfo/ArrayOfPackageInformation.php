<?php

namespace Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo;

class ArrayOfPackageInformation implements \ArrayAccess, \Iterator, \Countable
{
    /**
     * @var PackageInformation[] $PackageInformation
     */
    protected $PackageInformation = null;

    public function __construct()
    {
    }

    /**
     * @return PackageInformation[]
     */
    public function getPackageInformation()
    {
        return $this->PackageInformation;
    }

    /**
     * @param PackageInformation[] $PackageInformation
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\ArrayOfPackageInformation
     */
    public function setPackageInformation(array $PackageInformation = null)
    {
        $this->PackageInformation = $PackageInformation;
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
        return isset($this->PackageInformation[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     *
     * @return PackageInformation
     */
    public function offsetGet($offset)
    {
        return $this->PackageInformation[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed              $offset The offset to assign the value to
     * @param PackageInformation $value  The value to set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            $this->PackageInformation[] = $value;
        } else {
            $this->PackageInformation[$offset] = $value;
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
        unset($this->PackageInformation[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PackageInformation Return the current element
     */
    public function current()
    {
        return current($this->PackageInformation);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->PackageInformation);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->PackageInformation);
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
        reset($this->PackageInformation);
    }

    /**
     * Countable implementation
     *
     * @return PackageInformation Return count of elements
     */
    public function count()
    {
        return count($this->PackageInformation);
    }
}
