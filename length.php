<?php

namespace App\Reverse;

require __DIR__ . '/vendor/autoload.php';

use function Php\Pairs\Pairs\cons;
use function Php\Pairs\Pairs\car;
use function Php\Pairs\Pairs\cdr;
use function Php\Pairs\Pairs\toString;

$list1 = cons(1, cons(2,null));
$list2 = cons(3, cons(4,cons(5, null)));


function length($list)
{
    // BEGIN (write your solution here)
    if ($list === null) {
        return 0;
    } else {
        return 1 + length(cdr($list));
    }
    // END
}

echo length($list2);