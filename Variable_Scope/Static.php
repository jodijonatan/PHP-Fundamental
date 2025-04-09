<?php

function increment () {
    static $counter = 1; //Static Scope
    echo "Counter : $counter" . PHP_EOL;
    $counter++;
}

increment();
increment();
increment();