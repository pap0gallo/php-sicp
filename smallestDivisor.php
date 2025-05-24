<?php

namespace App\Divisor;

function smallestDivisor($num)
{
    // BEGIN (write your solution here)
    $iterDivisor = function ($num, $div) use (&$iterDivisor) {

        if ($num < $div) {
            return $num;
        }
        if ($num % $div === 0) {
            return $div;
        }
        return $iterDivisor($num, $div + 1);
    };
    return $iterDivisor($num, 2);
    // END
}

echo smallestDivisor(1);