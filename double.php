<?php

namespace App\Double;

function double($func)
{
    // BEGIN (write your solution here)
    return function ($number) use ($func) {
        return $func($func($number));
    };
    // END
}

