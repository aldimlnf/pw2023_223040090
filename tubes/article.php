<?php 
    session_start();
    if($_SESSION['status_login'] != true){
        echo '<script>window.location="login.php"</script>';
    }
    require("koneksi.php");

    if( isset($_GET['button-search']) ){
      $keyword = $_GET['keyword'];
      $query = "SELECT * FROM tb_article WHERE judul = '%$keyword%'";
      $artikels = query($query);
    } else {
      $artikels = query("SELECT * FROM tb_article");
    }

?>
<head>
    <title>Tambah Article</title>
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
            <li class="current"><a href="dashboard.php">DASBOARD</a></li>
            <li><a href="article.php">DAFTAR ARTICLE</a></li>
            <li class="current"><a href="sign.php">LOGOUT</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <div class="tambah_artikel">
      <h3 style="font-size: 2.0rem; font-weight:850; margin-bottom:20px">Mengubah Article</h3>
      <div class="container">
   <div class="row">
      <div class="col-md-6">
        <form action="" method="get">
          <input type="text" placeholder="Masukan keyword" name="keyword" id="keyword" autocomplete="off" autofocus>
          <button class="btn bg-primary" type="submit" id="button-addon2" name="button-search" id="search">Cari</button>
        </form>
      </div>
    </div>
   </div>
      <a class="btn btn-primary offset-md-1" href="tambah-article.php">Tambah Article</a>
    </div>

    <!-- content -->
    <div class="container">
    <div id="search-container">
    <?php if($artikels) :?>
    <table border ="1" cellspacing="0" class="table">
                    <tr>
                        <th width="60px">No</th>
                        <th>Judul</th>
                        <th>Gambar</th>
                        <th width="150px">Hapus</th>
                        <th width="150px">Edit</th>
                    </tr>
                    <?php $i = 1; ?>
            <?php foreach($artikels as $artikel): ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td><?= $artikel['judul']; ?></td>
                        <td><img src="./img/<?= $artikel['gambar']; ?>" style="width:80px;" alt=""></td>
                        <td><a class="badge text-bg-warning" href="hapus.php?id_article=<?= $artikel["id_article"]; ?>">Hapus</a></td>
                        <td><a class="badge text-bg-danger" href="edit.php?id_article=<?= $artikel["id_article"]; ?>">Edit</a></td>
                    </tr>
                    <?php $i++?>
            <?php endforeach; ?>
            </table> 
            <?php else : ?>
    <div class="row">
      <div class="col-md-6">
        <div class="alert alert-danger" role="alert">
            Data Ga ada
        </div>
      </div>
    </div>
  <?php endif; ?>
  
    <!-- footer -->
    <footer>
        <div class="container col-md-3">
            <small>Copyright &copy; 2023 - Universitas Pasundan.</small>
        </div>
    </footer>
    <script src="js/script.js"></script>
</body>
</html>