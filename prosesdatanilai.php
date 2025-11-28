<?php
$nim   = $_POST["nim"];
$nama  = $_POST["nama"];
$uts   = $_POST["uts"];
$uas   = $_POST["uas"];
$tugas = $_POST["tugas"];

// Hitung nilai akhir
$nilai_akhir = ($uts * 0.30) + ($uas * 0.40) + ($tugas * 0.30);

// Tentukan grade
if ($nilai_akhir >= 85 && $nilai_akhir <= 100) {
    $grade = "A";
} elseif ($nilai_akhir >= 70) {
    $grade = "B";
} elseif ($nilai_akhir >= 60) {
    $grade = "C";
} elseif ($nilai_akhir >= 40) {
    $grade = "D";
} else {
    $grade = "E";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hasil Nilai Mahasiswa</title>
</head>
<body>

<center>
<h2>==============================<br>
HASIL PERHITUNGAN NILAI<br>
==============================</h2>

<table border="1" cellpadding="7">

<tr>
    <td>NIM</td>
    <td><?php echo $nim; ?></td>
</tr>

<tr>
    <td>Nama Mahasiswa</td>
    <td><?php echo $nama; ?></td>
</tr>

<tr>
    <td>Nilai UTS</td>
    <td><?php echo $uts; ?></td>
</tr>

<tr>
    <td>Nilai UAS</td>
    <td><?php echo $uas; ?></td>
</tr>

<tr>
    <td>Nilai Tugas</td>
    <td><?php echo $tugas; ?></td>
</tr>

<tr>
    <td>Nilai Akhir</td>
    <td><?php echo number_format($nilai_akhir, 2); ?></td>
</tr>

<tr>
    <td>Grade</td>
    <td><?php echo $grade; ?></td>
</tr>

</table>

<br><br>

<a href="nilai.php">Kembali ke Input</a>

</center>

</body>
</html>