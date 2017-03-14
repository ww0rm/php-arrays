<?php

use PHPUnit\Framework\TestCase;
use ww0rm\PHPArrays\Arrays;

class ArraysTest extends TestCase
{
    public function testFilter()
    {
        $array = [0, 1, 2, 3, 4, 5];
        $this->assertEquals([0, 2, 4], Arrays::of($array)->filter(function ($i) {
            return $i % 2 == 0;
        })->collect(), '', 0.0, 10, true);
    }

    public function testMap()
    {
        $array = [0, 1, 2, 3, 4, 5];
        $this->assertEquals([0, 2, 4, 6, 8, 10], Arrays::of($array)->map(function ($i) {
            return $i * 2;
        })->collect(), '', 0.0, 10, true);
    }

    public function testDistinct()
    {
        $array = [0, 3, 1, 2, 1, 3, 4, 0, 5];
        $this->assertEquals([0, 3, 1, 2, 4, 5], Arrays::of($array)->distinct()->collect(), '', 0.0, 10, true);
    }

    public function testSkipAndLimit()
    {
        $array = [0, 1, 2, 3, 4, 5];
        $this->assertEquals([2, 3, 4], Arrays::of($array)->skip(2)->limit(3)->collect(), '', 0.0, 10, true);
    }

    public function testReverse()
    {
        $array = [0, 1, 2, 3];
        $this->assertEquals([3, 2, 1, 0], Arrays::of($array)->reverse()->collect(), '', 0.0, 10, true);
    }

    public function testSumInt()
    {
        $array = [1, 2, 3, 4, 5];
        $this->assertEquals(15, Arrays::of($array)->sumInt(), '', 0.0, 10, true);
    }

    public function testSumFloat()
    {
        $array = [1.2, 2.1, 3.2, 4.5, 5.4];
        $this->assertEquals(16.4, Arrays::of($array)->sumFloat(), '', 0.0, 10, true);
    }

    public function testLength()
    {
        $array = [1, 2, 3, 4, 5];
        $this->assertEquals(5, Arrays::of($array)->length(), '', 0.0, 10, true);
    }

    public function testSort()
    {
        $array = [1, 5, 10, 2, 3];
        $this->assertEquals([1, 2, 3, 5, 10], Arrays::of($array)->sorted()->collect(), '', 0.0, 10, true);
    }

    public function testAnyMatch()
    {
        $array = [1, 2, 3, 4, 5];

        $this->assertEquals(true, Arrays::of($array)->anyMatch(function ($i) {
            return $i % 2 == 0;
        }), '', 0.0, 10, true);

        $this->assertEquals(false, Arrays::of($array)->anyMatch(function ($i) {
            return $i == 7;
        }), '', 0.0, 10, true);
    }

    public function testAllMatch()
    {
        $array = [2, 3, 4, 5, 6];

        $this->assertEquals(true, Arrays::of($array)->allMatch(function ($i) {
            return $i > 1;
        }), '', 0.0, 10, true);

        $this->assertEquals(false, Arrays::of($array)->anyMatch(function ($i) {
            return $i == 1;
        }), '', 0.0, 10, true);
    }

    public function testNoneMatch()
    {
        $array = [2, 3, 4, 5, 6];

        $this->assertEquals(true, Arrays::of($array)->noneMatch(function ($i) {
            return $i == 1;
        }), '', 0.0, 10, true);

        $this->assertEquals(false, Arrays::of($array)->noneMatch(function ($i) {
            return $i > 1;
        }), '', 0.0, 10, true);
    }
}
