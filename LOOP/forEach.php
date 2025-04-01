<?php

// $names = ["Jodi", "Jonatan", "Karo karo"];

// for ( $i = 0; $i < count($names); $i++) {
//     echo "Hello $names[$i]" . PHP_EOL;
// }


// $names = ["Jodi", "Jonatan", "Karo karo"];

// foreach ($names as $name) {
//     echo "Hello $name" . PHP_EOL;
// }


$person = [
    "firstName" => "Jodi",
    "middleName" => "Jonatan",
    "lastName" => "Karo karo"
];

foreach ($person as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}