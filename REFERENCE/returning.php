<?php

function &getValue () {
    static $value = 100;
    return $value;
}

$a = &getvalue ();
$a = 200;

$b = &getValue ();
echo $b . PHP_EOL ;