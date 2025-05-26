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

// BEGIN
function subRat($rat1, $rat2)
{
    $numer = numer($rat1) * denom($rat2) - numer($rat2) * denom($rat1);
    $denom = denom($rat1) * denom($rat2);

    return makeRat($numer, $denom);
}

function equalRat($rat1, $rat2)
{
    return numer($rat1) * denom($rat2) === numer($rat2) * denom($rat1);
}
// END
