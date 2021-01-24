<?php
// Koneksi
$conn = mysqli_connect("localhost", "root", "", "eternal_audams");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

function register($data) {

    global $conn;

    $email = htmlspecialchars($data["Email"]);
    $namalengkap = htmlspecialchars($data["Nama_Lengkap"]);
    $namapanggilan = htmlspecialchars($data["Nama_Panggilan"]);
    $tempatlahir = htmlspecialchars($data["Tempat_Lahir"]);
    $tanggallahir = htmlspecialchars($data["Tanggal_Lahir"]);
    $jeniskelamin = htmlspecialchars($data["Jenis_Kelamin"]);
    $agama = htmlspecialchars($data["Agama"]);
    $alamat = htmlspecialchars($data["Alamat"]);
    $kelas = htmlspecialchars($data["Kelas"]);
    $nis = htmlspecialchars($data["NIS"]);
    $hobi = htmlspecialchars($data["Hobi"]);
    $fotodiri = htmlspecialchars($data["Foto_Diri"]);
    $jabatan = htmlspecialchars($data["Jabatan"]);
    $tanggalbergabung = htmlspecialchars($data["Tanggal_Bergabung"]);
    $notelp = htmlspecialchars($data["No_Telp"]);     

    // query insert data
    $query= "INSERT INTO eternal_audams_database_anggota
            VALUES
        ('', '$email', '$namalengkap', '$namapanggilan', '$tempatlahir', '$tanggallahir',
        '$jeniskelamin', '$agama', '$alamat', '$kelas', '$nis', '$hobi', '$fotodiri', '$jabatan', 
        '$tanggalbergabung', '$notelp')
    ";
    
    mysqli_query($conn, $query);

    return mysqli_affected_rows ($conn);
}

// function hapus($id) {
//     global $conn;
    
//     mysqli_query($conn, "DELETE FROM eternal_audams_database_anggota WHERE id= $id");

//     return mysqli_affected_rows($conn);

//     var_dump($conn);
// }

?>