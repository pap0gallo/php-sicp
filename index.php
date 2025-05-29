<?php

require __DIR__ . '/vendor/autoload.php';

use function Php\Pairs\Pairs\{cons, car, cdr, toString};

$list = cons(1, cons(2, cons(3, null)));

echo toString($list); // (1, 2, 3)
