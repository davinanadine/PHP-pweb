<?php
// Program 3.10 - break dan continue

for ($i = 1; $i < 10; $i++) {

    // Jika $i bernilai 5 → skip (tidak dicetak)
    if ($i == 5)
        continue;

    // Jika $i bernilai 8 → hentikan perulangan
    if ($i == 8)
        break;

    echo "$i ";
}

echo "<br><br>Nama: Davina Nadin<br>Kelas: XI PPLG";
?>