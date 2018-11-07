<?php

namespace Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo;

class ArrayOfPackageTransactionwithDeliveryDetail implements \ArrayAccess, \Iterator, \Countable
{
    /**
     * @var PackageTransactionwithDeliveryDetail[] $PackageTransactionwithDeliveryDetail
     */
    protected $PackageTransactionwithDeliveryDetail = null;

    public function __construct()
    {
    }

    /**
     * @return PackageTransactionwithDeliveryDetail[]
     */
    public function getPackageTransactionwithDeliveryDetail()
    {
        return $this->PackageTransactionwithDeliveryDetail;
    }

    /**
     * @param PackageTransactionwithDeliveryDetail[] $PackageTransactionwithDeliveryDetail
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\ArrayOfPackageTransactionwithDeliveryDetail
     */
    public function setPackageTransactionwithDeliveryDetail(array $PackageTransactionwithDeliveryDetail = null)
    {
        $this->PackageTransactionwithDeliveryDetail = $PackageTransactionwithDeliveryDetail;
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
        return isset($this->PackageTransactionwithDeliveryDetail[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     *
     * @return PackageTransactionwithDeliveryDetail
     */
    public function offsetGet($offset)
    {
        return $this->PackageTransactionwithDeliveryDetail[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed                                $offset The offset to assign the value to
     * @param PackageTransactionwithDeliveryDetail $value  The value to set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            $this->PackageTransactionwithDeliveryDetail[] = $value;
        } else {
            $this->PackageTransactionwithDeliveryDetail[$offset] = $value;
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
        unset($this->PackageTransactionwithDeliveryDetail[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PackageTransactionwithDeliveryDetail Return the current element
     */
    public function current()
    {
        return current($this->PackageTransactionwithDeliveryDetail);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->PackageTransactionwithDeliveryDetail);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->PackageTransactionwithDeliveryDetail);
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
        reset($this->PackageTransactionwithDeliveryDetail);
    }

    /**
     * Countable implementation
     *
     * @return PackageTransactionwithDeliveryDetail Return count of elements
     */
    public function count()
    {
        return count($this->PackageTransactionwithDeliveryDetail);
    }
}
