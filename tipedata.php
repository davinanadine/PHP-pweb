<?php
// Tipe data berbeda-beda
$nim = 212210023454;        // integer
$nama = "Nadlyne Aluna"; // string
$umur = 16;                 // integer
$nilai = 90.65;             // float
$status = true;             // boolean

// Ini menampilkan output ke layar
echo "NIM : $nim <br>";

print "Nama : $nama <br>";

echo "Umur : $umur <br>";

// Cetak nilai 90,65 menjadi 90,650
printf("Nilai : %.3f <br>", $nilai);

// Cetak status (true = Aktif)
echo "Status : " . ($status ? "Aktif" : "Tidak aktif");
?>