ww0rm\PHPArrays\Arrays
===============

Class Arrays
implements Java8 StreamAPI features in PHP7



Methods
-------


### filter

    \ww0rm\PHPArrays\Arrays ww0rm\PHPArrays\Arrays::filter(callable $callable)

filter array with callback


### map

    \ww0rm\PHPArrays\Arrays ww0rm\PHPArrays\Arrays::map(callable $callable)

map array with callback


### distinct

    \ww0rm\PHPArrays\Arrays ww0rm\PHPArrays\Arrays::distinct()

remove duplicate values from array


### skip

    \ww0rm\PHPArrays\Arrays ww0rm\PHPArrays\Arrays::skip(integer $from)

remove first N elements


### limit

    \ww0rm\PHPArrays\Arrays ww0rm\PHPArrays\Arrays::limit(integer $length)

remove last N elements


### reverse

    \ww0rm\PHPArrays\Arrays ww0rm\PHPArrays\Arrays::reverse()

reverse array


### collect

    array ww0rm\PHPArrays\Arrays::collect()

return array after operations


### sumInt

    integer ww0rm\PHPArrays\Arrays::sumInt()

return integer sum of array values


### sumFloat

    float ww0rm\PHPArrays\Arrays::sumFloat()

return float sum of array values


### length

    integer ww0rm\PHPArrays\Arrays::length()

return array size


### join

    string ww0rm\PHPArrays\Arrays::join(string $glue)

return joined values of array