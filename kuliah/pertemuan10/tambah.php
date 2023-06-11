<?php
require('functions.php');

$title = 'Form Insert Data';

//insert data ke tabel mahasiswa ketika tombol di klik

if(isset($_POST['tambah'])){
    if (tambah($_POST) > 0){
        echo "<script>
            alert('Data Berhasil Di Tambahkan');
            document.location.herf = 'index.php';
            </script>";

    }
}

require('views/tambah.fiew.php');
