<?php

namespace App;

use function Php\Pairs\Pairs\cons;
use function Php\Pairs\Pairs\car;
use function Php\Pairs\Pairs\cdr;

function reverse($list)
{
    $iter = function ($items, $acc) use (&$iter) {
      if ($items === null) {
          return $acc;
      } else {
          return $iter(cdr($items), cons(car($items), $acc));
      }
    };

    return $iter($list, null);
}
