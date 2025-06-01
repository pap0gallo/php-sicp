<?php

namespace App\Solution;

function newAccount($balance, $password)
{
    $withdraw = function ($amount) use (&$balance) {
        $balance -= $amount;
        return $balance;
    };

    $deposit = function ($amount) use (&$balance) {
        $balance += $amount;
        return $balance;
    };

    // BEGIN (write your solution here)
    return function ($funcName, $amount, $loginPasswrd) use ($withdraw, $deposit, &$password) {
        if ($loginPasswrd === $password) {
            switch ($funcName) {
                case 'withdraw':
                    return $withdraw($amount);
                case 'deposit':
                    return $deposit($amount);
            }
        } else {
            return 'wrong password!';
        }
    };
    // END
}
