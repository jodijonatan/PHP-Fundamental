<?php
// $Student = ["Jodi", "Jonatan", "Karo Karo"];
// $Student[] = "Kacaribu";
// $Student[] = "16";
// unset($Student[0]);
// echo count($Student) . "\n";
// echo $Student[4];
// var_dump($Student[0]);


// $siswa = [
//     "nama" => "Jodi Jonatan",
//     "jurusan" => "RPL",
//     "usia" => 16
// ]; 

// echo $siswa['nama'];


$siswa = [
    "Budi" => [
        "nama" => "budi simanjuntak",
        "umur" => 17,
        "tinggi" => 1.9
    ],
    "andre" => [
        "nama" => "andriana nababan",
        "umur" => 19,
        "tinggi" => 1.75
    ]
];

echo $siswa['andre']['nama'];