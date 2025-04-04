<?php

// function sum ( int $first, int $second) {
//     return $first + $second;
// }

// $total = sum (12, 32);
// var_dump ($total);


function getFinalValue ( int $value ) {
    if ($value >= 80) {
        return "A";
    } else if ($value >= 70) {
        return "B";
    } else if ($value >= 60) {
        return "C";
    } else if ($value >= 50) {
        return "D";
    } else {
        return "E";
    }
}

$skor = getFinalValue (90);
var_dump ($skor);