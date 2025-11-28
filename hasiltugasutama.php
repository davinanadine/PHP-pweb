<!DOCTYPE html>
<html>
<head>
    <title>Hasil Data Mahasiswa</title>
</head>

<body>

<h2>Halaman ini adalah respon dari server</h2>

<?php
    // Mengambil data menggunakan GET
    $nim      = isset($_GET['nim']) ? $_GET['nim'] : '';
    $nama     = isset($_GET['nama']) ? $_GET['nama'] : '';
    $jurusan  = isset($_GET['jurusan']) ? $_GET['jurusan'] : '';
    $email    = isset($_GET['email']) ? $_GET['email'] : '';
    $password = isset($_GET['password']) ? $_GET['password'] : '';

    echo "NIM : " . $nim . "<br>";
    echo "Nama : " . $nama . "<br>";
    echo "Jurusan : " . $jurusan . "<br>";
    echo "Email : " . $email . "<br>";
    echo "Password : " . $password . "<br>";
?>

</body>
</html>