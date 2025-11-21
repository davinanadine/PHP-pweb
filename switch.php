<?php
// Program 3.5 -Switch Case

$day = date("D");   // ambil 3 huruf pertama nama hari di dalam bahasa Inggris

switch ($day) {
    case 'Sun' : $hari = "Minggu"; break;
    case 'Mon' : $hari = "Senin"; break;
    case 'Tue' : $hari = "Selasa"; break;
    case 'Wed' : $hari = "Rabu"; break;
    case 'Thu' : $hari = "Kamis"; break;
    case 'Fri' : $hari = "Jum'at"; break;
    case 'Sat' : $hari = "Sabtu"; break;
    default    : $hari = "Kiamat";
}

echo "Hari ini hari <b>$hari</b>";

echo "<br><br>Nama: Davina Nadin<br>Kelas: XI PPLG";
?>