<?php
namespace Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo;

class ArrayOfTiNTInformation implements \ArrayAccess, \Iterator, \Countable
{
    /**
     * @var TiNTInformation[]
     */
    protected $TiNTInformation = null;

    public function __construct()
    {
    }

    /**
     * @return TiNTInformation[]
     */
    public function getTiNTInformation()
    {
        return $this->TiNTInformation;
    }

    /**
     * @param TiNTInformation[] $TiNTInformation
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\QueryPackageInfo\ArrayOfTiNTInformation
     */
    public function setTiNTInformation(array $TiNTInformation = null)
    {
        $this->TiNTInformation = $TiNTInformation;

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
        return isset($this->TiNTInformation[$offset]);
    }

    /**
     * ArrayAccess implementation.
     *
     * @param mixed $offset The offset to retrieve
     *
     * @return TiNTInformation
     */
    public function offsetGet($offset)
    {
        return $this->TiNTInformation[$offset];
    }

    /**
     * ArrayAccess implementation.
     *
     * @param mixed           $offset The offset to assign the value to
     * @param TiNTInformation $value  The value to set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            $this->TiNTInformation[] = $value;
        } else {
            $this->TiNTInformation[$offset] = $value;
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
        unset($this->TiNTInformation[$offset]);
    }

    /**
     * Iterator implementation.
     *
     * @return TiNTInformation Return the current element
     */
    public function current()
    {
        return current($this->TiNTInformation);
    }

    /**
     * Iterator implementation
     * Move forward to next element.
     *
     * @return void
     */
    public function next()
    {
        next($this->TiNTInformation);
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
        return key($this->TiNTInformation);
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element.
     *
     * @return void
     */
    public function rewind()
    {
        reset($this->TiNTInformation);
    }

    /**
     * Countable implementation.
     *
     * @return TiNTInformation Return count of elements
     */
    public function count()
    {
        return count($this->TiNTInformation);
    }
}
