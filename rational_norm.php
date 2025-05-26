<?php

namespace App\Rational;

use function Php\Pairs\Pairs\cons;
use function Php\Pairs\Pairs\car;
use function Php\Pairs\Pairs\cdr;
use function Php\Pairs\Pairs\toString;

function makeRat($numer, $denom)
{
    return cons($numer, $denom);
}

function numer($rat)
{
    return car($rat);
}

function denom($rat)
{
    return cdr($rat);
}

// BEGIN (write your solution here)
function gcd($a, $b)
{
    while ($b != 0) {
        [$a, $b] = [$b, $a % $b];
    }
    return abs($a);
}



function normalizeRat($rat)
{
    $numer = numer($rat);
    $denom = denom($rat);
    $gcd = gcd($numer, $denom);

    if ($denom < 0) {
        $numer *= -1;
        $denom *= -1;
    }

    $newNumer = $numer / $gcd;
    $newDenom = $denom / $gcd;

    return makeRat($newNumer, $newDenom);
}
function subRat($rat1, $rat2)
{
    $newNumer = (numer($rat1) * denom($rat2)) - (numer($rat2) * denom($rat1));
    $newDenom = denom($rat1) * denom($rat2);
    return makeRat($newNumer, $newDenom);
}

function equalRat($rat1, $rat2)
{
    $normRat1 = normalizeRat($rat1);
    $normRat2 = normalizeRat($rat2);
    return (numer($normRat1) === numer($normRat2) && denom($normRat1) === denom($normRat2));
}
// END
