<?php
require 'functions_anggota.php';
$eadt = query("SELECT*FROM eternal_audams_database_anggota");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page | Anggota</title>

    <link rel="icon" href="img/Logo/17 Fix Logo Eternal Audams 1.1 2020-01.png">
</head>
<body>

<div class="container-fluid">

<center><h1>Daftar Tim Eternal Audams</h1></center>

<center>
<a href="register_anggota.php">Tambah Data Tim Produksi</a>

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
        <th>Jabatan</th>
        <th>Tanggal Bergabung</th>
        <th>No. Telp.</th>
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
        <td><?= $row["Jabatan"]; ?></td>
        <td><?= $row["Tanggal Bergabung"]; ?></td>
        <td><?= $row["No. Telp."]; ?></td>
    </tr>
    <?php $i++ ;?>
    <?php endforeach; ?>
</table>

</center>
</div>
    
</body>
</html>