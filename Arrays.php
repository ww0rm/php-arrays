<?php
/**
 * Created by ww0rm.
 * Date: 2/22/17
 */

namespace ww0rm\arrays;


/**
 * Class Arrays
 * implements Java8 StreamAPI features in PHP7
 * @package ww0rm\arrays
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
    public static function of(array $array)
    {
        return new Arrays($array);
    }

    /**
     * @return Arrays
     */
    public static function new()
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
        $this->array = array_slice($this->array, $from, $this->count() - 1);
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
     * return array size
     * @return int
     */
    public function count() : int
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
}