<?php

function fib($num)
{
    // BEGIN (write your solution here)
    if ($num < 2) {
        return $num;
    }
    return fib($num - 1) + fib($num - 2);
    // END
}

print_r(fib(5));
