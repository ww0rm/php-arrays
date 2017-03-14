<?php

namespace ww0rm\PHPArrays;

/**
 * Class Arrays
 * implements Java8 StreamAPI features in PHP7
 * @package ww0rm\PHPArrays
 */
class Arrays
{
    /**
     * @var array
     */
    private $array;

    /**
     * @param array $array
     * @return Arrays
     */
    final public static function of(array $array)
    {
        return new Arrays($array);
    }

    /**
     * @return Arrays
     */
    final public static function new()
    {
        return new Arrays();
    }

    /**
     * Arrays constructor.
     * @param array $array
     */
    private function __construct(array $array = [])
    {
        $this->array = $array;
    }

    /**
     * filter array with callback
     * @param callable $callable filter callback
     * @return Arrays
     */
    public function filter(callable $callable) : Arrays
    {
        $this->array = array_filter($this->array, $callable);
        return $this;
    }

    /**
     * map array with callback
     * @param callable $callable
     * @return Arrays
     */
    public function map(callable $callable) : Arrays
    {
        $this->array = array_map($callable, $this->array);
        return $this;
    }

    /**
     * remove duplicate values from array
     * @return Arrays
     */
    public function distinct() : Arrays
    {
        $this->array = array_unique($this->array);
        return $this;
    }

    /**
     * remove first N elements
     * @param int $from
     * @return Arrays
     */
    public function skip(int $from) : Arrays
    {
        $this->array = array_slice($this->array, $from, $this->length() - 1);
        return $this;
    }

    /**
     * remove last N elements
     * @param int $length
     * @return Arrays
     */
    public function limit(int $length) : Arrays
    {
        $this->array = array_slice($this->array, 0, $length);
        return $this;
    }

    /**
     * reverse array
     * @return Arrays
     */
    public function reverse() : Arrays
    {
        $this->array = array_reverse($this->array);
        return $this;
    }

    /**
     * natural sort
     * @return Arrays
     */
    public function sorted() : Arrays
    {
        asort($this->array);
        return $this;
    }

    /**
     * return array after operations
     * @return array
     */
    public function collect() : array
    {
        return $this->array;
    }

    /**
     * return integer sum of array values
     * @return int
     */
    public function sumInt() : int
    {
        return array_sum($this->array);
    }

    /**
     * return float sum of array values
     * @return float
     */
    public function sumFloat() : float
    {
        return array_sum($this->array);
    }

    /**
     * is any elements match condition
     * @param callable $callable
     * @return bool
     */
    public function anyMatch(callable $callable) : bool
    {
        $array = Arrays::of($this->collect())->filter($callable);
        return $array->length() > 0;
    }

    /**
     * is all elements match condition
     * @param callable $callable
     * @return bool
     */
    public function allMatch(callable $callable) : bool
    {
        $array = Arrays::of($this->collect())->filter($callable);
        return $array->length() == $this->length();
    }

    /**
     * is elements not match condition
     * @param callable $callable
     * @return bool
     */
    public function noneMatch(callable $callable) : bool
    {
        return !$this->anyMatch($callable);
    }

    /**
     * return array size
     * @return int
     */
    public function length() : int
    {
        return sizeof($this->array);
    }

    /**
     * return joined values of array
     * @param string $glue
     * @return string
     */
    public function join(string $glue = '') : string
    {
        return implode($glue, $this->array);
    }

    /**
     * walk array and apply callable to element
     * @param callable $callable
     * @return bool
     */
    public function forEach(callable $callable) : bool
    {
        return array_walk($this->array, $callable);
    }
}