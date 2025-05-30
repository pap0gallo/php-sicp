<?php

namespace App\Solution;

use function Php\Pairs\Data\Lists\map;
use function Php\Pairs\Data\Lists\filter;
use function Php\Pairs\Data\Lists\reduce;

// BEGIN (write your solution here)
function solution($list)
{
    $roundedList = map($list, 'ceil');

    $isEven = function ($car) {
        return 0 === $car % 2;
    };
    $filteredList = filter($roundedList, $isEven);

    $multiply = function ($car, $acc) {
        return $acc * $car;
    };
    return reduce($filteredList, $multiply, 1);
}
// END
