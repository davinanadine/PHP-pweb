<!-- Form untuk memilih gender dan mengirimkannya ke cradio.php -->
<form action="cradio.php" method="post">

    Gender: <br><br>

    <!-- Radio button untuk memilih gender Laki-laki (default terpilih) -->
    <input type="radio" name="gender" value="Laki-laki" checked> Laki-laki<br>

    <!-- button untuk memilih gender Perempuan -->
    <input type="radio" name="gender" value="Perempuan"> Perempuan<br><br>

    <!-- tombol submit untuk mengirim data -->
    <input type="submit" value="Submit Data">

</form>