<?php
$Student = ["Jodi", "Jonatan", "Karo Karo"];
$Student[3] = "Kacaribu";
unset($Student[0]);
echo $Student[3];