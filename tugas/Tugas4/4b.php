<?php
$hardware = ["Motherboard", "Processor", "Hard Disk", "Pc Cooler", "VGA Card", "SSD"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hardware</title>
</head>

<body>
    <h4>Macam-macam perangkat keras komputer</h4>
    <ol>
        <?php for ($i = 0; $i < count($hardware); $i++) { ?>
            <li><?= $hardware[$i]; ?></li>
        <?php } ?>
    </ol>

    <?php
    array_unshift($hardware, "Card Reader", "Modem");
    sort($hardware) ?>
    <h4>Macam-macam perangkat keras komputer baru</h4>
    <ol>
        <?php for ($i = 0; $i < count($hardware); $i++) { ?>
            <li><?= $hardware[$i]; ?></li>
        <?php } ?>
    </ol>

</body>

</html>