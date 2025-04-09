<?php

// function plenger() {
//     echo "FOO";
// }

// $foo = "plenger";
// $foo();

function sayHello (string $name, $filter) {
    $finalName = $filter($name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("Jodi", "strtoupper");
sayHello("Jonatan", "strtolower");