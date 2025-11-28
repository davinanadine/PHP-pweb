<html>
<head>
    <title>Penanganan Form HTML</title>
</head>

<body>

<?php
$submit = $_GET['btnsubmit'];   // mengambil nilai tombol submit

if (isset($submit)) {           // cek apakah tombol submit dipencet
    $nama = $_GET['txtname'];   // mengambil data inputan txtname

    echo "Halaman ini adalah respon dari server <br>";
    echo "Selamat datang <strong>" . $nama . "</strong> di web kami";
}
?>

</body>
</html>