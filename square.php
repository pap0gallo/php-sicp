<?php

$square = function ($number) {
    return $number * $number;
};

$sumOfSquare = function ($number1, $number2) use ($square) {
    return $square($number1) + $square($number2);
};

echo $sumOfSquare(3, 5);