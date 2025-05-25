<?php

namespace App\Factor;

function factor($multiplier)
{
    // BEGIN (write your solution here)
    return function ($number) use ($multiplier) {
        return $number * $multiplier;
    };
    // END
}

$multiTwo = factor(3);

echo $multiTwo(5);