<!DOCTYPE html>
<html>
<head>
    <title>Form Registrasi</title>
</head>
<body>

<!-- judul form -->
<h2 align="center">Form Registrasi</h2>

<!-- mulai form, method post, menuju file proses -->
<form method="post" action="proses_registrasi.php">

<table align="center">

<!-- input nim -->
<tr>
    <td>NIM</td>
    <td>:</td>
    <td><input type="text" name="NIM"></td>
</tr>

<!-- input nama -->
<tr>
    <td>Nama</td>
    <td>:</td>
    <td><input type="text" name="NAMA"></td>
</tr>

<!-- input jenis kelamin -->
<tr>
    <td>Jenis Kelamin</td>
    <td>:</td>
    <td>
        <input type="radio" name="JK" value="laki-laki"> Laki-Laki
        <input type="radio" name="JK" value="perempuan"> Perempuan
    </td>
</tr>

<!-- combobox asal -->
<tr>
    <td>Asal</td>
    <td>:</td>
    <td>
        <select name="asal">
            <option value="Jawa Barat">Jawa Barat</option>
            <option value="Jawa Timur">Jawa Timur</option>
            <option value="Jawa Tengah">Jawa Tengah</option>
            <option value="Sulawesi">Sulawesi</option>
            <option value="Kalimantan">Kalimantan</option>
            <option value="Bali">Bali</option>
        </select>
    </td>
</tr>

<!-- input nomor telepon -->
<tr>
    <td>No Telp</td>
    <td>:</td>
    <td><input type="text" name="telp"></td>
</tr>

<!-- input email -->
<tr>
    <td>Alamat Email</td>
    <td>:</td>
    <td><input type="email" name="email"></td>
</tr>

<!-- input password -->
<tr>
    <td>Password</td>
    <td>:</td>
    <td><input type="password" name="password"></td>
</tr>

<!-- checkbox hobby -->
<tr>
    <td>Hobby</td>
    <td>:</td>
    <td>
        <input type="checkbox" name="hobby[]" value="sepakbola"> sepakbola
        <input type="checkbox" name="hobby[]" value="futsal"> futsal
        <input type="checkbox" name="hobby[]" value="renang"> renang<br>
        <input type="checkbox" name="hobby[]" value="membaca"> membaca
        <input type="checkbox" name="hobby[]" value="jogging"> jogging
        <input type="checkbox" name="hobby[]" value="nyanyi"> nyanyi
    </td>
</tr>

<!-- deskripsi diri -->
<tr>
    <td>Deskripsi Diri</td>
    <td>:</td>
    <td>
        <textarea name="deskripsi" cols="50" rows="5"></textarea>
    </td>
</tr>

<!-- tombol submit dan reset -->
<tr>
    <td></td>
    <td></td>
    <td>
        <input type="submit" value="Done">
        <input type="reset" value="batal">
    </td>
</tr>

</table>
</form>

</body>
</html>