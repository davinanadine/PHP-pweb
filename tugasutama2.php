<?php
// Nilai X dan Y itu ditentukan sendiri
$x = 3;   // Basis
$y = 4;   // Pangkat

// Inisialisasi
$h = 1;  // hasil
$l = 0;  

// Proses perulangan sesuai flowchart
while ($l < $y) {
    $h = $h * $x; // H = H * X
    $l = $l + 1;  // L = L + 1
}

// Output akhir
echo "X = $x<br>";
echo "Y = $y<br>";
echo "Hasil (X^Y) = $h<br><br>";

echo "Nama: Davina Nadin<br>";
echo "Kelas: XI PPLG<br>";
?>