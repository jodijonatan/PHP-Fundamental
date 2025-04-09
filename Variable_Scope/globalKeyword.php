<?php

$name = "Jodi Jonatan"; //global scope

function sayName () {
    global $name; //global keyword
    echo $name;
}

sayName();