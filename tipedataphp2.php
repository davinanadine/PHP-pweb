<?php

// Data Zayn
$nama = "Zayn Malik";
$jamKerja = 56;          // total jam bekerja selama 6 hari
$jamWajib = 48;          // jam wajib
$tarifGaji = 40000;      // gaji per jam
$tarifLembur = 15000;    // gaji lembur per jam
$sudahMenikah = true;
$jumlahAnak = 2;
$pajak = 0.11;           // 11%

// ini hitung gaji pokok
$gajiPokok = $jamWajib * $tarifGaji;

// hitung lembur (jika lebih dari 48 jam)
if ($jamKerja > $jamWajib) {
    $jamLembur = $jamKerja - $jamWajib;
    $gajiLembur = $jamLembur * $tarifLembur;
} else {
    $jamLembur = 0;
    $gajiLembur = 0;
}

// Tunjangan menikah
$tunjanganMenikah = $sudahMenikah ? 200000 : 0;

// Tunjangan anak
$tunjanganAnak = $jumlahAnak * 50000;

// Total gaji kotor
$gajiKotor = $gajiPokok + $gajiLembur + $tunjanganMenikah + $tunjanganAnak;

// Hitung pajak
$potonganPajak = $gajiKotor * $pajak;

// Gaji bersih
$gajiBersih = $gajiKotor - $potonganPajak;

// outputnya
echo "<h2>Perhitungan Gaji Zayn Malik</h2>";
echo "Gaji Pokok : Rp " . number_format($gajiPokok, 0, ',', '.') . "<br>";
echo "Jam Lembur : $jamLembur jam<br>";
echo "Gaji Lembur : Rp " . number_format($gajiLembur, 0, ',', '.') . "<br>";
echo "Tunjangan Menikah : Rp " . number_format($tunjanganMenikah, 0, ',', '.') . "<br>";
echo "Tunjangan Anak : Rp " . number_format($tunjanganAnak, 0, ',', '.') . "<br><br>";

echo "Gaji Kotor : Rp " . number_format($gajiKotor, 0, ',', '.') . "<br>";
echo "Pajak 11% : Rp " . number_format($potonganPajak, 0, ',', '.') . "<br><br>";

echo "<b>Gaji Bersih : Rp " . number_format($gajiBersih, 0, ',', '.') . "</b>";
?>