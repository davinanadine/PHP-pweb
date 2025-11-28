<!DOCTYPE html>
<html>
<head>
    <title>Hasil Perhitungan Luas</title>
</head>
<body>

<h2>Hasil Dari Perhitungan Luas Persegi Panjang</h2>

<?php
// Ambil data
$panjang = $_GET['panjang'];
$lebar   = $_GET['lebar'];

// Jika luas tidak diisi, hitung otomatis
if (!isset($_GET['luas']) || $_GET['luas'] == "") {
    $luas = $panjang * $lebar;
} else {
    $luas = $_GET['luas'];
}

// Tampilkan hasil
echo "Nilai Panjang : $panjang <br>";
echo "Nilai Lebar   : $lebar <br>";
echo "Luas          : $luas <br>";
?>

<br>
<a href="tugasutama2.php">Kembali ke Form</a>

</body>
</html>