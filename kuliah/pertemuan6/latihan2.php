<?php 
// Array associative
// array yang index nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
    'nama' => 'aldi',
    'binatang' => '🦖',
    'makanan' => ['🌯']
    ],
    [
    'nama' => 'atep',
    'binatang' => '🐄',
    'makanan' => ['🥙']
    ],
    [
    'nama' => 'Suherman',
    'binatang' => '🐊',
    'makanan' => ['🎂']
    ],
    [
    'nama' => 'Harom',
    'binatang' => '🐔',
    'makanan' => ['🍓']
    ],
    [
    'nama' => 'atta',
    'binatang' => '🐵',
    'makanan' => ['🍔']
    ],

];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <?php foreach($mahasiswa as $i) { ?>
    <ul>
     <li>Nama : <?= $i['nama']; ?></li>
     <li>Favorit Makanan :
        <?php foreach($mhs['makanan'] as ) {
          
        } ?>
    </li>

     <li>Peliharaan : <?= $i['binatang']; ?></li>
     
    </ul>
    <?php } ?>
</body>
</html>