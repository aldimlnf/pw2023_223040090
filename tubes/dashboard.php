<?php 
    require("koneksi.php");
    session_start();
    if($_SESSION['status_login'] != true){
        echo '<script>window.location="login.php"</script>';
    }
?>
<head>
    <title>Dashboard Article</title>
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
          <h1><span class="highlight">Halaman</span> Dashboard</h1>
        </div>
        <nav>
          <ul>
            <li class="current"><a href="index.php">DASBOARD</a></li>
            <li><a href="article.php">DAFTAR ARTICLE</a></li>
            <li class="current"><a href="sign.php">LOGOUT</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <!-- content -->
    <div class="section">
        <div class="container">
            <h3 style="font-size: 2.0rem; font-weight:850;margin-bottom:20px">Dashboard</h3>
            <div class="box">
                <h4>Selamat Datang <?php echo $_SESSION['a_global']->admin_name ?> di Dashboard Article</h4>
            </div>
        </div>
    </div>
    <section id="boxes">
       <div class="container">
        <div class="row">
        <?php while ( $row = mysqli_fetch_assoc($result) ): ?>
          <div class="col-md-3">
            <div class="card" style="width: 18rem;">
              <img src="img/<?= $row['gambar']; ?>" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><?= $row['judul']; ?></h5>
                <p class="card-text"><?= $row['descripsi']; ?></p>
                <a href="article.php"></a>
              </div>
            </div>
          </div>
        <?php endwhile; ?>         
        </div>  
      </div>
    </section>
    <!-- footer -->
    <footer>
        <div class="container col-md-4">
            <small>Copyright &copy; 2023 -niversitas Pasundan.</small>
        </div>
    </footer>
</body>
</html>