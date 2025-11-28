<form method="post" action="cbArrayLoophasil.php">

<?php

// ARRAY BULAN
$bulan = array(
    "Januari", "Februari", "Maret", "April", "Mei", "Juni",
    "Juli", "Agustus", "September", "Oktober", "Nopember", "Desember"
);

echo "Data bulan: <br>";

// SELECT
echo "<select name='bln'>";

// MENAMPILKAN BULAN
for ($i = 0; $i < count($bulan); $i++) {
    echo "<option value='".$bulan[$i]."'>".$bulan[$i]."</option>";
}

// TUTUP SELECT
echo "</select>";

?>

<br><br>
<input type="submit" value="Kirim">

</form>