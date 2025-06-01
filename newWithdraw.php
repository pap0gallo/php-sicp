<?php

namespace App\Solution;

// BEGIN (write your solution here)
function newDeposit($balance)
{
    return function ($amount) use (&$balance) {
        return $balance < $amount ? 'too much' : $balance -= $amount;
    };
}

$count = newDeposit(100);

echo $count(30);
// END
