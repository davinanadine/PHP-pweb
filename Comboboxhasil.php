<?php

if (isset($_POST["jurusan"])) {

    $jurusan = $_POST["jurusan"];

    echo "<h2>Hasil Pilihan Anda</h2>";
    echo "Jurusan yang Anda pilih adalah: <b>$jurusan</b>";

} else {
    echo "Tidak ada jurusan yang dipilih.";
}
?>