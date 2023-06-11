<?php
require('functions.php');

$title = 'Home';

if(isset($_GET['button-saerch'])){
    $keyword = $_GET['keyword'];
    $query = "SELECT * FROM 
                mahasiswa 
                WHERE
                nama LIKE '%$keyword%' or
                jurusan LIKE '%$keyword%' or
                email LIKE '%$keyword%' 
                ";
    $students = query($query);
}else{
    $students = query("SELECT * FROM mahasiswa");
}


require('views/index.view.php');