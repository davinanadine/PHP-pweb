<!DOCTYPE html>
<html>
<head>
    <title>DATA MAHASISWA</title>
</head>
<body>

<h2 style="text-align:center; background:mistyrose; color:black; padding:10px;">
    DATA MAHASISWA
</h2>

<table border="1" width="400" cellpadding="8" style="background:mistyrose; color:black; border-collapse:collapse;">

<tr>
    <td>Nama</td>
    <td><?php echo $_GET['nama']; ?></td>
</tr>

<tr>
    <td>Alamat</td>
    <td><?php echo $_GET['alamat']; ?></td>
</tr>

<tr>
    <td>Jenis Kelamin</td>
    <td><?php echo $_GET['jk']; ?></td>
</tr>

<tr>
    <td>Pekerjaan</td>
    <td><?php echo $_GET['pekerjaan']; ?></td>
</tr>

<tr>
    <td>Hobi</td>
    <td>
        <?php 
            if (isset($_GET['hobi'])) {
                echo implode(", ", $_GET['hobi']);
            } else {
                echo "-";
            }
        ?>
    </td>
</tr>

</table>

<br>
<a href="tugasutama3.php" style="font-size:15px; color:purple;">INPUT DATA LAGI</a>

</body>
</html>