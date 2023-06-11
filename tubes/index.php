<?php 
    require("koneksi.php");
    $artikels = query("SELECT * FROM tb_article");
?>
<!DOCTYPE html>
<html>
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
            <li class="current"><a href="index.php">HOME</a></li>
            <li><a href="#boxes">ARTICLE</a></li>
            <li><a href="#contact">CONTACT</a></li>
            <li class="current"><a href="sign.php">SIGN UP</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <section id="mark">
      <div class="container">
        <h1>Perkembangan Technology Informasi</h1>
        <p> ~ Deretan informasi technology di Dunia ~ </p>
      </div>
    </section>
    <section id="newsletter">
      <div class="container">
        <h1>Fill In Your Full Name</h1>
        <form>
          <input type="text" name="nama" placeholder="Full name" required/>
          <button type="submit" class="button-subscribe">submit</button>
        </form>
      </div>
    </section>
    <section id="boxes">
       <div class="container">
        <div class="row">
        <?php foreach ($artikels as $artikel): ?>
          <div class="col-md-3">
            <div class="card" style="width: 18rem;">
              <img src="img/<?= $artikel['gambar']; ?>" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><?= $artikel['judul']; ?></h5>
                <a href="post.php?id_article=<?= $artikel['id_article'];?>" class="btn btn-primary">Baca selengkapnya</a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>       
        </div>     
      </div>   
    </section>

     <!--Footer-->
     
     <footer>
     <section id="contact">
        <div class="footer_main">
          
            <div class="tag">
                <h1>Contact</h1>
                <a href="https://www.google.com/maps/dir/Setiabudi+Mall,+Jl.+Dr.+Setiabudi+No.4,+RW.01,+Hegarmanah,+Kec.+Cidadap,+Kota+Bandung,+Jawa+Barat+40131/Bandung,+Kota+Bandung,+Jawa+Barat/"><i class="fa-solid fa-house"></i>Jl. Raya Stiabudi No. 131</a>
                <a href="#"><i class="fa-solid fa-phone"></i>08157090255</a>
                <a href="#"><i class="fa-solid fa-envelope"></i>aldimaulanafadilah@gmail.com</a>
            </div>

            <div class="tag">
                <h1>Get Help</h1>
                <a href="https://faqabout.me" class="center">FAQ</a>
                <a href="https://www.twill.net" class="center">Shipping</a>
                <a href="https://happyreturns.com" class="center">Returns</a>
                <a href="https://sur.ly/i/pncpaymentoptions.com/" class="center">Payment Options</a>
            </div>

            <div class="tag">
                <h1>Our Stores</h1>
                <a href="https://www.google.com/maps/place/Prancis" class="center">Prancis</a>
                <a href="https://www.google.com/maps/place/Amerika+Serikat" class="center">USA</a>
                <a href="https://www.google.com/maps/place/Rusia" class="center">Rusia</a>
                <a href="https://www.google.com/maps/place/Belanda" class="center">Belanda</a>
            </div>

            <div class="tag tengah">
                <h1>Follow Medsos</h1>
                <div class="social_link">
                    <a href="https://www.facebook.com/aldimaulana.fadilah.58"><i class="fa-brands fa-facebook"></i></a>
                    <a href="https://twitter.com/MEGA_LORDul"><i class="fa-brands fa-twitter"></i></a>
                    <a href="https://instagram.com/aldimlnf_"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://youtube.com/@aldimaulanafadilah2616"><i class="fa-brands fa-youtube"></i></i></a>
                                     
                </div>
            </div>

            <div class="tag">
                <h1>Newsletter</h1>
                <div class="search_bar">
                    <input type="text" placeholder="enter your email here">
                    <button type="submit" class="offset-md-7 button-subscribe">Subscribe</button>
                </div>
            </div>

        </div>
        </section>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>