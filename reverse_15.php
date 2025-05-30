<?php

namespace App\Solution;

use function Php\Pairs\Pairs\car;
use function Php\Pairs\Pairs\isPair;
use function Php\Pairs\Pairs\cdr;
use function Php\Pairs\Pairs\cons;
use function Php\Pairs\Pairs\toString;

function reverse($list)
{
    // BEGIN (write your solution here)
    $iter = function ($items, $acc) use (&$iter) {
        if ($items === null) {
            return $acc;
        }
        $head = car($items);
        $tail = cdr($items);

        $head = isPair($head) ? reverse($head) : $head;
        return $iter($tail, cons($head, $acc));
    };
    return $iter($list, null);
    // END
}
