<?php
// mengambil data dari form registrasi
$nim        = $_POST["NIM"];
$nama       = $_POST["NAMA"];
$jk         = $_POST["JK"];
$asal       = $_POST["asal"];
$telp       = $_POST["telp"];
$email      = $_POST["email"];
$password   = $_POST["password"];
$deskripsi  = $_POST["deskripsi"];

// jika ada hobby yang dipilih
$hobby_list = "";
if (!empty($_POST["hobby"])) {
    // menggabungkan array menjadi tulisan
    $hobby_list = implode(", ", $_POST["hobby"]);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>hasil registrasi</title>
</head>
<body>

<h2 align="center">hasil registrasi mahasiswa</h2>

<table border="1" cellpadding="7" align="center">

<tr>
    <td>nim</td>
    <td><?php echo $nim; ?></td>
</tr>

<tr>
    <td>nama</td>
    <td><?php echo $nama; ?></td>
</tr>

<tr>
    <td>jenis kelamin</td>
    <td><?php echo $jk; ?></td>
</tr>

<tr>
    <td>asal</td>
    <td><?php echo $asal; ?></td>
</tr>

<tr>
    <td>no telp</td>
    <td><?php echo $telp; ?></td>
</tr>

<tr>
    <td>alamat email</td>
    <td><?php echo $email; ?></td>
</tr>

<tr>
    <td>password</td>
    <td><?php echo $password; ?></td>
</tr>

<tr>
    <td>hobby</td>
    <td><?php echo $hobby_list; ?></td>
</tr>

<tr>
    <td>deskripsi diri</td>
    <td><?php echo nl2br($deskripsi); ?></td>
</tr>

</table>

<br><br>

<div align="center">
    <a href="form_registrasi.php">kembali input data</a>
</div>

</body>
</html>