<?php

namespace App\Solution;

use function Php\Pairs\Data\Lists\filter;
use function Php\Pairs\Data\Lists\map;
use function Php\Pairs\Data\Lists\reduce;
use function Php\Pairs\Data\Lists\length;
use function Php\Pairs\Pairs\toString;

// BEGIN (write your solution here)
function isMultipleOfThree($list)
{
    return filter($list, fn($item) => 0 === $item % 3);
}

function toSquare($list)
{
    return map($list, fn($item) => $item ** 2);
}

function summarise($list)
{
    return reduce($list, fn($item, $acc) => $acc + $item, 0);
}

function solution($list)
{
    $ofThree = isMultipleOfThree($list);

    $square = toSquare($ofThree);

    $sum = summarise($square);

    return $sum / length($square);
}
// END
