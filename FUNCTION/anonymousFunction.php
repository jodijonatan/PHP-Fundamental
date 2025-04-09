<?php

// $sayhello = function (string $name) {
//     echo "Hello, $name" . PHP_EOL;
// };

// $sayhello("Jodi Jonatan");


//ANONYMOUS FUNCTION SEBAGAI ARGUMENT
function sayGoodBye (string $name, $filter) {
    $finalName = $filter($name);
    echo "Good Bye $finalName" . PHP_EOL;
}

sayGoodBye("Jodi", function (string $name) {
    return strtoupper($name);
});


//MENGAKSES VARIABLE DI LUAR CLOSURE
$firstName = "Jodi";
$lastName = "Jonatan";

$sayHello = function () use ($firstName, $lastName) {
    echo "Hello, $firstName $lastName";
};

$sayHello();