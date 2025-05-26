<?php

namespace App\Solution;

function cons($x, $y)
{
    return function ($func) use ($x, $y) {
        return $func($x, $y);
    };
}

function car(callable $pair)
{
    // BEGIN (write your solution here)
    return $pair(function ($t) {
        return $t;
    });
    // END
}

function cdr(callable $pair)
{
    // BEGIN (write your solution here)
    return $pair(function ($r, $p) {
        return $p;
    });
    // END
}


$pair = cons(2,5);

echo car($pair);