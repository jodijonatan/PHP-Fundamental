<?php

function factorial (int $value) : int {
    if ($value == 1) {
        return 1;
    } else {
        return $value * factorial ($value - 1);
    }
}

echo factorial(6);
var_dump (factorial (6));