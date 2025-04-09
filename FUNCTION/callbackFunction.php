<?php

function sayHello (string $name, callable $filter) {
    $finalName = call_user_func ($filter, $name);
    echo "Hello, $finalName" . PHP_EOL;
}

sayHello ("Jodi", function ($name) {
    return strtoupper($name);
});
sayHello ("Jodi" , fn ($name) => strtoupper ($name));
sayHello("Jodi", "strtoupper");