<?php

// $peoples = [
//     "name" => "Jodi Jonatan",
//     "age" => 16,
//     "major" => "Rekayasa Perangkat Lunak"
// ];

// foreach ($peoples as $key => $value ) {
//     echo "$key: $value" . PHP_EOL;
// }


function peoples (...$Names) {
    foreach ($Names as $name) {
        echo "$name ";
    }
}

peoples("Jodi", "Jonatan", "Karo karo");