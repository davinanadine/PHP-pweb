<!DOCTYPE html>
<html>
<head>
    <title>PENERIMAAN BEASISWA</title>
</head>
<body>

<h2>PENERIMAAN BEASISWA</h2>

<form action="prosesbeasiswa.php" method="post">

<table>
<tr>
    <td>Nama</td>
    <td>:</td>
    <td><input type="text" name="nama"></td>
</tr>

<tr>
    <td>NIM</td>
    <td>:</td>
    <td><input type="text" name="nim"></td>
</tr>

<tr>
    <td>Kelas</td>
    <td>:</td>
    <td><input type="text" name="kelas"></td>
</tr>

<tr>
    <td>Jurusan</td>
    <td>:</td>
    <td>
        <select name="jurusan">
            <option value="SI">SI</option>
            <option value="TI">TI</option>
            <option value="RPL">RPL</option>
        </select>
    </td>
</tr>

<tr>
    <td>Jenis Kelamin</td>
    <td>:</td>
    <td>
        <input type="radio" name="jk" value="Pria"> Pria
        <input type="radio" name="jk" value="Wanita"> Wanita
    </td>
</tr>

<tr>
    <td>IPK</td>
    <td>:</td>
    <td><input type="text" name="ipk"></td>
</tr>

<tr>
    <td colspan="3">
        <br>
        <input type="submit" value="Proses">
        <input type="reset" value="Batal">
    </td>
</tr>

</table>
</form>

</body>
</html>