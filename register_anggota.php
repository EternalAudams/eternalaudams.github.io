<?php

require 'functions_anggota.php';

// Submit
    if( isset($_POST["submit"]) ) {

        // cek data
       if ( register($_POST) > 0 ) {
           echo "
            <script>
                alert('Registrasi Ulang Berhasil!');
                document.location.href = 'index.html';
            </script>
           ";
       }
       else {
           echo "
           <script>
                alert('Mohon Maaf, Registrasi Ulang Anda Tidak berhasil!');
                document.location.href = 'register_anggota.php';
           </script>
       ";
       }
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Registration</title>
    <link rel="icon" href="img/Logo/17 Fix Logo Eternal Audams 1.1 2020-01.png">
    <link rel="stylesheet" href="register.css">
  </head>
  <body>

	<!-- Nav Bar -->
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container-fluid">
            <a class="navbar-brand" href="index.html"><img src="img/Logo/Header Channel.jpg" alt="Eternal Audams" width="230px" height="50px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                <a class="nav-link active" aria-current="page" href="AboutUs.html">About Us</a>
                <a class="nav-link" href="index.html#video">Video</a>
                <a class="nav-link" href="Gallery.html">Gallery</a>
                <a class="nav-link disabled" href="register_pendaftaran.php">Registrasi</a>
                </div>
            </div>
            </div>
        </nav>
      </div>

    <!-- Register Form -->
    
    <div class="register container" style="padding-top: 10px;">

    <div class="card column">
      <div class="card-body">

        <center>
      <span><h5 class="card-title" style="padding:10px;">Form Registrasi Ulang Tim Produksi Eternal Audams</h5>
        </center>

      <form action="" method="post" enctype="multipart/form-data">
      <ul style="list-style: none; padding: 10px;">
            <li style="padding: 10px;">
                <input class="form-control" type="email" placeholder="Email" aria-label="default input example" name="Email" id="Email" required>
            </li>
            <li style="padding: 10px;">
                <input class="form-control" type="text" placeholder="Nama Lengkap" aria-label="default input example" name="Nama_Lengkap" id="Nama_Lengkap" required>
            </li>
            <li style="padding: 10px;">
                <input class="form-control" type="text" placeholder="Nama Panggilan" aria-label="default input example" name="Nama_Panggilan" id="Nama_Panggilan" required>
            </li>
            <li style="padding: 10px;">
                <input class="form-control" type="text" placeholder="Tempat Lahir" aria-label="default input example" name="Tempat_Lahir" id="Tempat_Lahir" required>
            </li>
            <li style="padding: 10px;">
            <div class="input-group">
                <label class="input-group-text" for="inputGroupSelect01">Tanggal Lahir</label>
                <input class="form-control" type="date" placeholder="Tanggal Lahir" aria-label="default input example" name="Tanggal_Lahir" id="Tanggal_Lahir" required>
            </div>
            </li>
            <li style="padding: 10px;" required>
            <div class="input-group">
                <label class="input-group-text" for="inputGroupSelect01">Jenis Kelamin</label>
                <select class="form-select" id="inputGroupSelect01" name="Jenis_Kelamin" id="Jenis_Kelamin" >
                    <option selected>Pilih Jenis Kelamin...</option>
                    <option value="Laki Laki">Laki Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            </li>
            <li style="padding: 10px;" required>
            <div class="input-group">
                <label class="input-group-text" for="inputGroupSelect01">Agama</label>
                <select class="form-select" id="inputGroupSelect01" name="Agama" id="Agama">
                    <option selected>Pilih Agama...</option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Katholik">Katholik</option>
                    <option value="Budha">Budha</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Konghucu">Konghucu</option>
                </select>
            </div>
            </li>
            <li style="padding: 10px;">
                <input class="form-control" type="text" placeholder="Alamat" aria-label="default input example" name="Alamat" id="Alamat" required>
            </li>
            <li style="padding: 10px;"  required>
            <div class="input-group">
              <label class="input-group-text" for="inputGroupSelect01">Kelas</label>
              <select class="form-select" id="inputGroupSelect01" name="Kelas" id="Kelas">
                <option selected>Pilih Kelas...</option>
                <option value="10 IBBU">10 IBBU</option>
                <option value="10 MIPA 1">10 MIPA 1</option>
                <option value="10 MIPA 2">10 MIPA 2</option>
                <option value="10 MIPA 3">10 MIPA 3</option>
                <option value="10 MIPA 4">10 MIPA 4</option>
                <option value="10 MIPA 5">10 MIPA 5</option>
                <option value="10 IPS 1">10 IPS 1</option>
                <option value="10 IPS 2">10 IPS 2</option>
                <option value="10 IPS 3">10 IPS 3</option>
                <option value="10 IPS 4">10 IPS 4</option>
                <hr value="11">
                <option value="11 IBBU">11 IBBU</option>
                <option value="11 MIPA 1">11 MIPA 1</option>
                <option value="11 MIPA 2">11 MIPA 2</option>
                <option value="11 MIPA 3">11 MIPA 3</option>
                <option value="11 MIPA 4">11 MIPA 4</option>
                <option value="11 MIPA 5">11 MIPA 5</option>
                <option value="11 IPS 2">11 IPS 2</option>
                <option value="11 IPS 3">11 IPS 3</option>
                <option value="11 IPS 4">11 IPS 4</option>
              </select>
            </div>
            </li>
            <li style="padding: 10px;">
                <input class="form-control" type="text" placeholder="NIS (Contoh : 001234)" aria-label="default input example" name="NIS" id="NIS" required>
            </li>
            <li style="padding: 10px;">
                <input class="form-control" type="text" placeholder="Hobi" aria-label="default input example" name="Hobi" id="Hobi" required>
            </li>
            <li style="padding: 10px;">
                <input class="form-control" type="text" placeholder="Foto Diri ( Berupa Link Drive )" aria-label="default input example" name="Foto_Diri" id="Foto_Diri" required>
            </li>
            <li style="padding: 10px;"  required>
            <div class="input-group">
              <label class="input-group-text" for="inputGroupSelect01">Jabatan</label>
              <select class="form-select" id="inputGroupSelect01" name="Jabatan" id="Jabatan">
                <option selected>Pilih Jabatan...</option>
                <option>Ketua Umum</option>
                <option>Sekretaris Umum</option>
                <option>Bendahara Umum</option>
                <option>Ketua Divisi Pengkaderan dan Komunitas</option>
                <option>Sekretaris Divisi Pengkaderan dan Komunitas</option>
                <option>Anggota Divisi Pengkaderan dan Komunitas</option>
                <option>Ketua Divisi Komunikasi dan Informasi</option>
                <option>Sekretaris Divisi Komunikasi dan Informasi</option>
                <option>Anggota Divisi Komunikasi dan Informasi</option>
                <option>Ketua Divisi Kreatif dan Produksi</option>
                <option>Sekretaris Divisi Kreatif dan Produksi</option>
                <option>Anggota Divisi Kreatif dan Produksi</option>
              </select>
            </div>
            </li>
            <li style="padding: 10px;">
            <div class="input-group" >
                <label class="input-group-text" for="inputGroupSelect01">Tanggal Bergabung</label>
                <input class="form-control" type="date" placeholder="Tanggal Bergabung" aria-label="default input example" name="Tanggal_Bergabung" id="Tanggal_Bergabung" required>
            </div>
            <li style="padding: 10px;">
                <input class="form-control" type="number" placeholder="No. Telp." aria-label="default input example" name="No_Telp" id="No_Telp" required>
            </li>

            <center>
            <li style="padding-top: 30px;">
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </li>
            </center>
        </ul>
        </span>
          
    </div>
</div>

    <!-- Footer -->
    
    <hr class="my-4">
    
    <div class="container">
      <footer class="container py-2">
        <div class="row">
          <div class="col-12 col-md">
            <img src="img/Logo/Header Channel.jpg" alt="Eternal Audams" width="150px" height="35px">
            <small class="d-block mb-3 text-muted">© 2020 | Versi 1.0.1</small>
          </div>
          <div class="col-6 col-md">
            <h5>Social Media</h5>
            <ul class="list-unstyled text-small">
              <li><a class="link-secondary" href="https://www.instagram.com/eternalaudams_/">Instagram</a></li>
              <li><a class="link-secondary" href="https://www.youtube.com/channel/UCVVR0VoW7bNPWeVye9NFQiA">YouTube</a></li>
              <li><a class="link-secondary disabled" href="/">Facebook</a></li>
            <!--<li><a class="link-secondary disabled" href="/">Twitter</a></li> -->
            </ul>
          </div>
          <div class="col-2 col-md-4">
            <h5>Message</h5>
            <ul class="list-unstyled text-small">
                <li><a class="link-secondary" href="mailto:@eternalaudams@gmail.com">eternalaudams@gmail.com</a></li>
            </ul>
              </div>
          </div>
        </div>
      </footer>
    </div>
     <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>