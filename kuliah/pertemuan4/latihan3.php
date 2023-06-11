<?php 
 // Array Binatang
 $mahasiswa = ['Aril', 'Dila', 'George', 'Oding']
 $binatang = ['🐕', '🦖', '🐒', '🐄'];
 $makanan = ['🌯', '🍔', '🍩', '🥙'];
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>

    <?php foreach ($mahasiswa as $i => $mhs) { ?>
    <ul>
        <li>nama : <?= $mhs;  ?></li>
        <li>Makanan Favorit : <?= $makanan[]; ?> </li>
        <li>Binatang Peliharaan : </li>
    </ul>
    <?php } ?>

</body>
</html>