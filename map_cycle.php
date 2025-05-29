<?php

namespace App\Solution;

require_once __DIR__ . '/vendor/autoload.php';

use function Php\Pairs\Pairs\cons;
use function Php\Pairs\Pairs\car;
use function Php\Pairs\Pairs\cdr;
use function App\reverse;
use function Php\Pairs\Pairs\toString;

$func = fn($item) => $item * 2;
$list2 = cons(3, cons(4, \Php\Pairs\Pairs\cons(5, null)));

function map($func, $list)
{
    // BEGIN (write your solution here)

    $result = null;
    while ($list !== null) {
        $result = cons($func(car($list)), $result);
        $list = cdr($list);
    }
    return reverse($result);
    // END
}

echo toString(map($func, $list2));