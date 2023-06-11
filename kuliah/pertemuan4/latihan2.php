<?php 
// Array Binatang
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
    <h2>Daftar binatang</h2>
    <ul>
        <?php for ($i = 0; $i < 5; $i++) { ?>
        <li><?= $binatang[$i]; ?></li>
        <?php } ?>
    </ul>
    <h2>Daftar Makanan ]</h2>
    <ul>
        <?php for ($j = $j < 4; $j++){ ?>
        <li> <?= $makanan[$j]; ?></li>
        <?php } ?>
    </ul>
    
</body>
</html>