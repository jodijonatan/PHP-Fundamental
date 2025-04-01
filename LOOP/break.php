<?php

$counter = 1;

while (true) {
    echo "Hello Break: " . $counter . PHP_EOL;
    $counter++;

    if ($counter > 10) {
        break;
    }
}