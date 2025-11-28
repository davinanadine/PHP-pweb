<?php
$nama    = $_POST["nama"];
$nim     = $_POST["nim"];
$kelas   = $_POST["kelas"];
$jurusan = $_POST["jurusan"];
$jk      = $_POST["jk"];
$ipk     = $_POST["ipk"];

if ($ipk >= 3.8 && $ipk <= 4.0) {
    $ket = "Mendapat beasiswa sebesar Rp. 3.000.000";
} elseif ($ipk >= 3.5) {
    $ket = "Mendapat beasiswa sebesar Rp. 2.000.000";
} elseif ($ipk >= 3.0) {
    $ket = "Mendapat beasiswa sebesar Rp. 1.000.000";
} else {
    $ket = "Maaf, Anda tidak mendapatkan beasiswa";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hasil Beasiswa</title>
</head>
<body>

<h2>HASIL PENERIMAAN BEASISWA</h2>

<table>
<tr><td>Nama</td><td>:</td><td><?php echo $nama; ?></td></tr>
<tr><td>NIM</td><td>:</td><td><?php echo $nim; ?></td></tr>
<tr><td>Kelas</td><td>:</td><td><?php echo $kelas; ?></td></tr>
<tr><td>Jurusan</td><td>:</td><td><?php echo $jurusan; ?></td></tr>
<tr><td>Jenis Kelamin</td><td>:</td><td><?php echo $jk; ?></td></tr>
<tr><td>IPK</td><td>:</td><td><?php echo $ipk; ?></td></tr>

<tr>
    <td colspan="3"><br><b><?php echo $ket; ?></b></td>
</tr>
</table>

<br>
<form action="beasiswa.php">
    <button type="submit">Kembali Ke Halaman Awal</button>
</form>

</body>
</html>