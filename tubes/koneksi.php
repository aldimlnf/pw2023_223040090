<?php 
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $dbname   = 'db_warungtecnology';

    $conn = mysqli_connect($hostname, $username, $password, $dbname) or die ('gagal terhubung ke database');
    $result = mysqli_query($conn, "SELECT * FROM tb_article");

    // fungsi querry
    function query ($query){
        global $conn;
        $hasil =  mysqli_query($conn, $query);
        $baris = [];
        while( $bari = mysqli_fetch_assoc($hasil) ) {
            $baris [] = $bari;
        }
        return $baris;
    }

    // Fungsi Hapus Artikel
    function hapusartikel ($id_article) {
        global $conn;
        mysqli_query($conn, "DELETE FROM tb_article WHERE id_article = $id_article");
        return mysqli_affected_rows($conn);
    }
    // funsi ubah artikel
    function ubahartikel($dataartikel){
        global $conn;
        $id_article = ($_POST['id_article']);
        $judul = htmlspecialchars($_POST['judul']);
        $descripsi= htmlspecialchars($_POST['descripsi']);
        $gambar = htmlspecialchars($_POST['gambar']);
        $category_id = htmlspecialchars($_POST['category_id']);

        $query = "UPDATE tb_article SET
        judul = '$judul',
        descripsi = '$descripsi',
        gambar = '$gambar',
        category_id = '$category_id'
        WHERE id_article = $id_article
        ";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }
?>