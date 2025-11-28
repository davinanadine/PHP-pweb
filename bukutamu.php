<?php
$nama = $_POST["nama"];
$komentar = $_POST["komentar"];
?>

<b>Nama:</b> <?php echo $nama; ?>
<br><br>

<b>Komentar:</b><br>
<textarea name="komentar" cols="40" rows="5"><?php echo $komentar; ?></textarea>