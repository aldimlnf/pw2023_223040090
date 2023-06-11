<?php 
require('koneksi.php');
$id_article = $_GET["id_article"];

$artikels = query("SELECT * FROM tb_article WHERE id_article = $id_article")[0];
?>

<head>
    <title>Daftar Article</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
    <link
      href="https://fonts.googleapis.com/css?family=Raleway&display=swap"
      rel="stylesheet"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>
  <body>
    <header>
      <div class="container">
        <div id="branding">
          <h1><span class="highlight">Daftar</span> Article</h1>
        </div>
        <nav>
          <ul>
            <li class="current"><a href="index.php">BACK HOME</a></li>
          </ul>
        </nav>
        <div class="section">
        <div class="container">
            <div class="box">
                    <h3 style="font-size: 2.0rem; font-weight:850;margin-bottom:20px"><?= $artikels['judul']; ?></h3>
                    <hr>
                    <img class="col-md-4 offset-4" src="img/<?= $artikels['gambar']; ?>" alt="" class="img-fluid text-center">
                    <br>
                    <br>
                    <p><?= $artikels['descripsi']; ?></p>
                </div>
            </div>
        </div>
    </div>
    </header>