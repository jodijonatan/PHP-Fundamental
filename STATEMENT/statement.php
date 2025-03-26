<?php

$nilai = 99;
$absen = 100;

if ($nilai >= 90 && $absen >= 90) {
    $hasil = "A";
} else if ($nilai >= 80 && $absen >= 80) {
    $hasil = "B";
} else if ($nilai >= 70 && $absen >= 70) {
    $hasil = "C";
} else {
    $hasil = "D";
}

switch ($hasil) {
    case "A":
        echo "Lulus dengan sangat baik";
        break;
    case "B":
        echo "Lulus dengan baik";
        break;
    case "C":
        echo "Tidak lulus";
        break;
    default :
        echo "Mungkin kamu salah jurusan";
}