<?php
namespace Teknomavi\Kargo\Company\Ups\Helper\CreateShipment;

class ArrayOfBoxType implements \ArrayAccess, \Iterator, \Countable
{
    /**
     * @var BoxType[]
     */
    protected $BoxType = null;

    public function __construct()
    {
    }

    /**
     * @return BoxType[]
     */
    public function getBoxType()
    {
        return $this->BoxType;
    }

    /**
     * @param BoxType[] $BoxType
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ArrayOfBoxType
     */
    public function setBoxType(array $BoxType = null)
    {
        $this->BoxType = $BoxType;

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
        return isset($this->BoxType[$offset]);
    }

    /**
     * ArrayAccess implementation.
     *
     * @param mixed $offset The offset to retrieve
     *
     * @return BoxType
     */
    public function offsetGet($offset)
    {
        return $this->BoxType[$offset];
    }

    /**
     * ArrayAccess implementation.
     *
     * @param mixed   $offset The offset to assign the value to
     * @param BoxType $value  The value to set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            $this->BoxType[] = $value;
        } else {
            $this->BoxType[$offset] = $value;
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
        unset($this->BoxType[$offset]);
    }

    /**
     * Iterator implementation.
     *
     * @return BoxType Return the current element
     */
    public function current()
    {
        return current($this->BoxType);
    }

    /**
     * Iterator implementation
     * Move forward to next element.
     *
     * @return void
     */
    public function next()
    {
        next($this->BoxType);
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
        return key($this->BoxType);
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element.
     *
     * @return void
     */
    public function rewind()
    {
        reset($this->BoxType);
    }

    /**
     * Countable implementation.
     *
     * @return BoxType Return count of elements
     */
    public function count()
    {
        return count($this->BoxType);
    }
}
