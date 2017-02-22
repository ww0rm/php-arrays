# php-arrays [![Build Status](https://travis-ci.org/ww0rm/php-arrays.svg?branch=master)](https://travis-ci.org/ww0rm/php-arrays)
Implements Java8 StreamAPI in PHP7
##### Required PHP 7+

# Install
```
composer require ww0rm/php-arrays
```

# Documentation
[View](https://github.com/ww0rm/php-arrays/blob/master/docs/index.md)

# Example
```php
$array = [0, 1, 2, 3, 4, 5];
$result = Arrays::of($array)->filter(function ($i) {
    return $i % 2 == 0;
})->collect(); // [0, 2, 4]
```
