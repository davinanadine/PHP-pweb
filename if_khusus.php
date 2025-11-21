<?php
$tahun = date("Y"); 
$KABISAT =($tahun%4 == 0) ? "Ini adalah tahun KABISAT" : "Bukan tahun KABISAT";
echo "Tahun <b>$tahun</b> $KABISAT";
echo "<br><br>Nama: Davina Nadin<br>Kelas: XI PPLG";
?>