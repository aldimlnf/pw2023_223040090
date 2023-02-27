<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2d catur</title>
    <style>
        .kotak-hitam {
            background-color: black;
        }

        .kotak-putih {
            background-color: white;
        }

        .kotak-hitam .kota-putih {
            height: 50px;
            width: 50px;
        }
    </style>
</head>

<body>
    <table border="1" cellspacing="0" cellpadding="30">
        <?php for ($i = 1; $i <= 5; $i++) : ?>
            <tr>
                <?php for ($j = 1; $j <= 5; $j++) : ?>

                    <?php $total = $i + $j; ?>

                    <?php if ($total % 2 == 0) : ?>
                        <td class="kotak-hitam"></td>
                    <?php else :  ?>
                        <td class="kotak-putih"></td>
                    <?php endif ?>

                <?php endfor ?>

            </tr>
        <?php endfor ?>
    </table>

</body>

</html>