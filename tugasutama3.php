<!DOCTYPE html>
<html>
<head>
    <title>PENGELOLAAN DATA MAHASISWA</title>
</head>
<body>

<h2>PENGELOLAAN DATA MAHASISWA</h2>

<form action="hasiltugasutama3.php" method="GET">

    Nama : 
    <input type="text" name="nama" required><br><br>

    Alamat :
    <input type="text" name="alamat" required><br><br>

    Jenis Kelamin :
    <input type="radio" name="jk" value="Laki-Laki" required> Laki-Laki
    <input type="radio" name="jk" value="Perempuan" required> Perempuan
    <br><br>

    Pekerjaan :
    <select name="pekerjaan" required>
        <option value="">Pilih</option>
        <option value="Pelajar">Pelajar</option>
        <option value="Mahasiswa">Mahasiswa</option>
        <option value="Karyawan">Karyawan</option>
        <option value="Lainnya">Lainnya</option>
    </select>
    <br><br>

    Hobi :
    <input type="checkbox" name="hobi[]" value="Olahraga"> Olahraga
    <input type="checkbox" name="hobi[]" value="Musik"> Musik
    <input type="checkbox" name="hobi[]" value="Bernyanyi"> Bernyanyi
    <br><br>

    <input type="submit" value="Kirim">
    <input type="reset" value="Batal">

</form>

</body>
</html>