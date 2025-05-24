<?php

namespace App\Factorial;

function factorial($num)
{
    // BEGIN (write your solution here)
    $factIter = function ($num, $acc) use (&$factIter) {
        if ($num <= 1) {
            return $acc;
        }
        return $factIter($num - 1, $acc * $num);
    };
    return $factIter($num, 1);
    // END
}

echo factorial(4);