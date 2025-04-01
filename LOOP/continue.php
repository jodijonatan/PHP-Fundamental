<?php

for($counter = 0; $counter <= 100; $counter++) {
    if ($counter % 2 == 1) {
        continue;
    }
    echo "Hello Break: " . $counter . PHP_EOL;
}