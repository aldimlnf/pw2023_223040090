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
    <div class="container">
    <form action="" method="POST" enctype="multipart/form-data" class="login-email">
    <p style="font-size: 2.6rem; font-weight:850;margin-bottom:20px">Tambah Article</p>
    <div class="input-group"><input type="text" class="form-control-sm"  placeholder="judul" name="judul"></div>
    <div class="input-group"><input type="file" class="input-group-text" id="inputGroupFile02" placeholder="gambar" name="gambar"></div>
    <div class="input-group"><input type="text" class="form-control-sm" placeholder="deskripsi" name="descripsi"></div>
    <div class="input-group"><input type="text" class="form-control-sm" placeholder="kategori Id" name="category_id"></div>
    <div class="input-group"><button name="submit" class="badge bg-primary">Daftar</button></div>
</form>
<?php 
               function uploadImage()
               {
                 $imageName = $_FILES['gambar']['name'];
                 $imageSize = $_FILES['gambar']['size'];
                 $error = $_FILES['gambar']['error'];
                 $tmpName = $_FILES['gambar']['tmp_name'];
               
               
                 if ($error === 4) {
                   echo "<script>alert('Insert an image!');</script>";
                   return false;
                 }
               
               
                 if ($imageSize > 10000000 || $error === 1) {
                   echo "<script>alert('Image is too big');</script>";
                   return false;
                 }
               
                 if ($error !== 0) {
                   echo "<script>alert('Failed to upload an image!');</script>";
                   return false;
                 }
               
                 $validExtention = ['jpg', 'jpeg', 'png'];
                 $imageExtention = explode('.', $imageName);
                 $imageExtention = strtolower(end($imageExtention));
                 if (!in_array($imageExtention, $validExtention)) {
                   echo "<script>alert('Not an image!');</script>";
                   return false;
                 }
               
               
               
                 $newImageName = uniqid();
                 $newImageName .= '.';
                 $newImageName .= $imageExtention;
               
               
                 move_uploaded_file($tmpName, 'img/' . $newImageName);
                 return $newImageName;
               }
              if(isset($_POST['submit'])){
                include 'koneksi.php';

                $judul = htmlspecialchars($_POST['judul']);
                $gambar = uploadImage();
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