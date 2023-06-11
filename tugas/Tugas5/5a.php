<?php 
    $mahasiswa = [
        [
        "nama" => "Aldi Maulana Fadilah",
        "NRP" =>"223040090",
        "email" =>"AldiMaulanaf@gmail.com",
        "Jurusan" => "Teknik Informatika",
        "gambar" =>"aldi if 22.png"
        ],
        [
        "nama" => "Muhammad Ariel Septiadi",
        "NRP" =>"223040073",
        "email" =>"Ariell560@gmail.com",
        "Jurusan" => "Teknik Informatika",
        "gambar" =>"ariel if 22.png"
        ],
        [
        "nama" => "George Frederik Pingak",
        "NRP" =>"223040080",
        "email" =>"George887@gmail.com",
        "Jurusan" => "Teknik Informatika",
        "gambar" =>"george if 22.png"
        ],
        [
        "nama" => "Rendy Pratama Putra",
        "NRP" =>"223040102",
        "email" =>"Rendyy122@gmail.com",
        "Jurusan" => "Teknik Informatika",
        "gambar" =>"rendy if 22.png"
        ],
        [
        "nama" => "Muhammad Azhar Luthfiadi",
        "NRP" =>"223040086",
        "email" =>"Azhar677@gmail.com",
        "Jurusan" => "Teknik Informatika",
        "gambar" =>"ariel if 22.png"
        ],
        [
         "nama" => "Rafi Ikhsanul Hakim",
         "NRP" =>"223040095",
         "email" =>"rafi909@gmail.com",
         "Jurusan" => "Teknik Informatika",
         "gambar" =>"rafi if 22.png"
        ],
        [
         "nama" => "Dony Laksmana",
         "NRP" =>"223040103",
         "email" =>"donylks111@gmail.com",
         "Jurusan" => "Teknik Informatika",
         "gambar" =>"Dony if 22.png"
        ],
        [
        "nama" => "Visi Muhammad Ialami",
        "NRP" =>"223040075",
        "email" =>"Visi075@gmail.com",
        "Jurusan" => "Teknik Informatika",
        "gambar" =>"visi if 22.png"
        ],
        [
        "nama" => "Irsan Moch.Taufik Febrian",
        "NRP" =>"223040076",
        "email" =>"Irsan076@gmail.com",
        "Jurusan" => "Teknik Informatika",
        "gambar" =>"irsan if 22.png"
        ],
        [
        "nama" => "Diki faturrohman",
        "NRP" =>"223040117",
        "email" =>"diki117@gmail.com",
        "Jurusan" => "Teknik Informatika",
        "gambar" =>"diki if 22.png"
        ],
    ];
    
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>

        <ul>
            <li>
                <img src="img/<?=$mhs["gambar"]; ?>">
            </li>
            <li>Nama : <?=$mhs["nama"]; ?></li>
            <li>NRP : <?=$mhs["NRP"]; ?></li>
            <li>Email : <?=$mhs["email"]; ?></li>
            <li>Jurusan : <?=$mhs["Jurusan"]; ?></li>
        </ul>
        <?php endforeach; ?>
</body>
</html>