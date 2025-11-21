<?php
// Nilai ditentukan sendiri (tanpa input)
$status = "langganan";   // isi: langganan / non
$jlf = 120;              // jumlah lembar fotokopi

// Menentukan HPP
if ($status == "langganan") {
    $hpp = 10;
} else {
    if ($jlf < 100) {
        $hpp = 100;
    } else {
        $hpp = 85;
    }
}

// hitung total harga (TH)
$th = $jlf * $hpp;

// Output hasil
echo "Status: $status <br>";
echo "Jumlah Lembar Fotokopi (JLF): $jlf <br>";
echo "Harga Per Lembar (HPP): $hpp <br>";
echo "Total Harga (TH): Rp $th <br><br>";

echo "Nama: Davina Nadin<br>Kelas: XI PPLG";
?>