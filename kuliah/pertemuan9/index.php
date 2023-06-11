<?php 
   require('functions.php');
   $title = 'Home';
   $students = [
     [
        "nama" => "aldi maulana",
        "npm" => "223040090",
        "email" => "aldimaulanafadilah@gmail.com"
     ],
     [
        "nama" => "Oding Kacadek",
        "npm" => "223040081",
        "email" => "odingdoang@gmail.com"
     ]

    ];

   //  dd($_SERVER["REQUEST_URI"]);
   //  /pw2023_223040090/kuliah/pertemuan9/
require('views/index.view.php');
?>