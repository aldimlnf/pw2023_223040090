<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2c.php</title>
    <Style>
        .kotak {
            width: 48px;
            background-color: salmon;
            text-align: center;
            line-height: 48px;
            border: 1px solid black;

        }

        .flex {
            display: flex;
        }

    
    </Style>
</head>
<body>
    
    <?php
    for ($i = 10; $i >= 1; $i--) {
        echo "<div class=\"flex\">";
        for ($j = 1; $j <= $i; $j++) {
            echo "<div class=\"kotak\">$j</div>";
        }
        echo "</div>";
    } 
    ?>
</body>
</html>