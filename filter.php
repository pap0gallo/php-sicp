<?php

namespace App\Solution;

use function App\Pair\cons;
use function App\Pair\car;
use function App\Pair\cdr;
use function App\Pair\reverse;
use function App\Pair\listToString;

function filter($func, $list)
{
    // BEGIN (write your solution here)
    $iter = function ($list, $acc) use (&$iter, $func) {
        if ($list === null) {
            return reverse($acc);
        }
        if ($func(car($list))) {
            return $iter(cdr($list), cons(car($list), $acc));
        } else {
            return $iter(cdr($list), $acc);
        }
    };
    return $iter($list, null);
    // END
}
