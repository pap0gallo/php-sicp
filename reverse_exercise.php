<?php

namespace App;

require_once __DIR__ . '/vendor/autoload.php';

use function Php\Pairs\Pairs\cons;
use function Php\Pairs\Pairs\car;
use function Php\Pairs\Pairs\cdr;
use function Php\Pairs\Pairs\toString;

$list = cons(1, cons(2, cons(3, null)));

function reverse($list)
{
    // BEGIN (write your solution here)
    $iter = function ($items, $acc) use (&$iter) {
      if ($items === null) {
          return $acc;
      } else {
          return $iter(cdr($items), cons(car($items), $acc));
      }
    };

    return $iter($list, null);
    // END
}

 echo toString(reverse($list));