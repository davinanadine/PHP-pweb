<?php

// CEK APAKAH ADA DATA YANG DIKIRIM
if (isset($_POST['bln'])) {

    $bulanDipilih = $_POST['bln'];

    echo "<h2>Hasil Pilihan</h2>";
    echo "Bulan yang Anda pilih adalah: <b>$bulanDipilih</b>";

} else {

    echo "Tidak ada data yang dikirim.";
}

?>