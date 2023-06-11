<?php 
require("koneksi.php");
$id_article = $_GET["id_article"];

// Querry berdasarkan id

$artikel = query("SELECT * FROM tb_article WHERE id_article = $id_article")[0];


// Cek apakah tombol submit sudah ditekan atau belum ?
if( isset($_POST["submit"]) ){

  // cek apakah data berhasil diubah atau tidak
  if( ubahartikel($_POST) > 0 ) {
    echo "
    <script>
    alert('Artikel berhasil diubah!');
    document.location.href= 'article.php';
    </script>
    ";
  } else {
    echo "
    <script>
    alert('Artikel gagal diubah');
    document.location.href = 'article.php';
    </script>
    ";
  }
}
?>
<head>
    <title>Technology Information</title>
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
          <h1><span class="highlight">Technology</span> Informasi</h1>
        </div>
        <nav>
          <ul>
            <li class="current"><a href="article.php">BACK ARTICLE</a></li>
          </ul>
        </nav>
    <div class="container">
    <form action="" method="POST"class="login-email">
    <p style="font-size: 2.6rem; font-weight:850;margin-bottom:20px">Tambah Article</p>
    <div class="input-group"><input type="hidden" name="id_article" value="<?= $artikel["id_article"]; ?>"></div>
    <div class="input-group"><input type="text" name="judul" value="<?= $artikel["judul"]; ?>"></div>
    <div class="input-group"><input type="text" name="gambar" value="<?= $artikel["gambar"]; ?>"></div>
    <div class="input-group"><input type="text"name="descripsi" value="<?= $artikel["descripsi"]; ?>"></div>
    <div class="input-group"><input type="text" name="category_id" value="<?= $artikel["category_id"]; ?>"></div>
    <div class="input-group"><button name="submit" class="badge bg-primary">Ubah</button></div>
</form>
<?php 
              if(isset($_POST['submit'])){
                include 'koneksi.php';

                $judul = htmlspecialchars($_POST['judul']);
                $gambar = htmlspecialchars($_POST['gambar']);
                $descripsi = htmlspecialchars($_POST['descripsi']);
                $category_id = htmlspecialchars($_POST['category_id']);
                
                $sql = "INSERT INTO `tb_article`(`judul`, `gambar`, `descripsi`, `category_id`) VALUES ('$judul', '$gambar', '$descripsi', '$category_id')";
                if (mysqli_query($conn, $sql)) {
                  // Redirect ke halaman login.php setelah pendaftaran berhasil
                  header("Location: article.php");
                  exit;
                }else { 
                  echo '<script>alert("Mendaftar Gagal");</script>'; }
              } 
            ?>