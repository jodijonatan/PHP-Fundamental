<?php
$nama = "Jodi Jonatan";
$umur = 16;
$tinngi = 1.7;
$isStudent = true;
$nilai = 90;

echo "Nama: $nama <br>";
echo "Umur: $umur <br>";
echo "Tinggi: $tinngi <br>";
echo "Apakah seorang mahasiswa? " . ($isStudent ? "Iya" : "Tidak") . "<br>";

$Status = ($nilai >= 90 ? "Lulus" : "Tidak Lulus");
echo "Status: $Status";
?>