<?php
// cek apakah ada hobi yang dipilih
if (isset($_POST['hobi'])) {

    // loop semua hobi yang dipilih
    foreach ($_POST['hobi'] as $h) {
        echo $h . "<br>";
    }

} else {
    echo "Tidak ada hobi yang dipilih.";
}
?>