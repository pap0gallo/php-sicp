<?php

namespace App\Sum;

function sum($start, $finish, $func)
{
    // BEGIN (write your solution here)
    if ($start > $finish) {
        return 0;
    }
    return $func($start) + sum($start + 1, $finish, $func);
    // END
}

echo sum(3, 30, function($num) {
   return $num ** 2;
});
