<?php

namespace App\Solution;

// BEGIN (write your solution here)
function random($seed)
{
    $base = $seed;
    return function ($method = null) use (&$seed, $base) {
        $a = 45;
        $c = 21;
        $m = 67;
        switch ($method) {
            case 'reset':
                $seed = $base;
                break;
            default:
                $seed = ($a * $seed + $c) % $m;
                break;
        }
        return $seed;
    };
}
// END

$seq = random(3);

echo $seq();
echo $seq();
echo $seq();
echo $seq();

$seq("reset");

echo $seq();



//$seq("reset");


