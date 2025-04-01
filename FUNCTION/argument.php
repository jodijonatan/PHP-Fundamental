<?php 

// function sayHello ($name) {
//     echo "Hello, $name" . PHP_EOL ;
// }

// sayHello("Jodi");
// sayHello("Jonatan");


// function sayHello ($name = "Anonymous") {
//     echo "Hello, $name" . PHP_EOL;
// }

// sayHello();
// sayHello("Jodi Jonatan");


function sayHello ($firstName, $lastName = "") {
    echo "Hello, $firstName $lastName" . PHP_EOL;
}

sayHello("Jodi");
sayHello("Jodi ",  "Jonatan");