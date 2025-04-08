<?php

function sum (int $first, int $second) : int {
    return $first + $second;
}

function sun (string $value) : string {
    return $value;
}

$hasil = sum (12, 23);
echo $hasil . PHP_EOL;

$hasil2 = sun ("124");
echo $hasil2;