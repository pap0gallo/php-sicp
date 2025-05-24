<?php

namespace App\Product;

function product($num1, $num2, $func)
{
    // BEGIN (write your solution here)
    if ($num1 === $num2) {
        return $num1;
    }
    return $func(product($num1, $num2 - 1, $func), $num2);
    // END
}

echo product(3,5, fn($a, $b) => $a - $b);