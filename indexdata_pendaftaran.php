<?php
require 'functions_pendaftaran.php';
$eadt = query("SELECT*FROM eternal_audams_database_pendaftaran");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page | Pendaftaran</title>

    <link rel="icon" href="img/Logo/17 Fix Logo Eternal Audams 1.1 2020-01.png">
</head>
<body>

<div class="container-fluid">

<center><h1>Daftar Register Tim Produksi Eternal Audams</h1></center>

<center>
<a href="register_pendaftaran.php">Tambah Data Tim Produksi</a>

<br>
<br>

<table border="1" cellpadding="10" cellspacing="0"> 

    <tr>
        <th>No.</th>
        <th>Email</th>
        <th>Nama Lengkap</th>
        <th>Nama Panggilan</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Jenis Kelamin</th>
        <th>Agama</th>
        <th>Alamat</th>
        <th>Kelas</th>
        <th>NIS</th>
        <th>Hobi</th>
        <th>Foto Diri</th>
        <th>No. Telp.</th>
        <th>Motto</th>
        <th>Riwayat Organisasi</th>
        <th>Motivasi Bergabung</th>
        <th>Harapan</th>
    </tr>

    <?php $i = 1; ?>
    <?php foreach( $eadt as $row ) : ?>
    <tr>
        <td><?= $i; ?></td>
        <td><?= $row["Email"]; ?></td>
        <td><?= $row["Nama Lengkap"]; ?></td>
        <td><?= $row["Nama Panggilan"]; ?></td>
        <td><?= $row["Tempat Lahir"]; ?></td>
        <td><?= $row["Tanggal Lahir"]; ?></td>
        <td><?= $row["Jenis Kelamin"]; ?></td>
        <td><?= $row["Agama"]; ?></td>
        <td><?= $row["Alamat"]; ?></td>
        <td><?= $row["Kelas"]; ?></td>
        <td><?= $row["NIS"]; ?></td>
        <td><?= $row["Hobi"]; ?></td>
        <td><?= $row["Foto Diri"]; ?></td>
        <td><?= $row["No. Telp."]; ?></td>
        <td><?= $row["Motto"]; ?></td>
        <td><?= $row["Riwayat Organisasi"]; ?></td>
        <td><?= $row["Motivasi Bergabung"]; ?></td>
        <td><?= $row["Harapan"]; ?></td>
    </tr>
    <?php $i++ ;?>
    <?php endforeach; ?>
</table>

</center>
</div>
    
</body>
</html>