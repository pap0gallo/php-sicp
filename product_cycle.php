<?php

namespace App\Product;

function product($num1, $num2, $func)
{
    // BEGIN (write your solution here)
    $result = $num1;
    for ($i = $num1 + 1; $i <= $num2; $i++) {
        $result = $func($result, $i);
    }
    return $result;
    // END
}

echo product(3,5, fn($a, $b) => $a - $b);