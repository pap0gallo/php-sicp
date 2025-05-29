<?php

namespace App\Reverse;

require __DIR__ . '/vendor/autoload.php';

use function Php\Pairs\Pairs\cons;
use function Php\Pairs\Pairs\car;
use function Php\Pairs\Pairs\cdr;
use function Php\Pairs\Pairs\toString;

$list1 = cons(1, cons(2,null));
$list2 = cons(3, cons(4,cons(5, null)));


function append($list1, $list2)
{
    // BEGIN (write your solution here)
    if ($list1 === null) {
        return $list2;
    } else {
        return cons(car($list1), append(cdr($list1), $list2));
    }
    // END
}

echo toString(append($list1, $list2));