<?php

require 'functions_anggota.php';

$id = $_GET["id"];

if ( hapus($id) > 0 ) {

            // cek data
            if ( register($_POST) > 0 ) {
                echo "
                 <script>
                     alert('Data Berhasil Dihapus!');
                     document.location.href = 'indexdata_anggota.php';
                 </script>
                ";
            }
            else {
                echo "
                <script>
                     alert('Data Tidak Berhasil Dihapus!');
                     document.location.href = 'indexdata_anggota.php';
                </script>
            ";
            }

}

?>