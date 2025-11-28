<!DOCTYPE html>
<html>
<head>
    <title>Data Nilai Mahasiswa</title>
</head>
<body>

<center>
<h2>==============================<br>
INPUT NILAI MAHASISWA<br>
==============================</h2>

<form action="prosesdatanilai.php" method="post">

<table>

<tr>
    <td>NIM</td>
    <td>:</td>
    <td><input type="text" name="nim" maxlength="8" required></td>
</tr>

<tr>
    <td>Nama Mahasiswa</td>
    <td>:</td>
    <td><input type="text" name="nama" required></td>
</tr>

<tr>
    <td>Nilai UTS</td>
    <td>:</td>
    <td><input type="number" name="uts" required></td>
</tr>

<tr>
    <td>Nilai UAS</td>
    <td>:</td>
    <td><input type="number" name="uas" required></td>
</tr>

<tr>
    <td>Nilai Tugas</td>
    <td>:</td>
    <td><input type="number" name="tugas" required></td>
</tr>

<tr>
    <td colspan="3" align="center"><br>
        <input type="submit" value="Proses">
        <input type="reset" value="Batal">
    </td>
</tr>

</table>
</form>
</center>

</body>
</html>