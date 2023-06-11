<?php 
// Query artikel
$artikels = query("SELECT * FROM artikel");
?>

<!-- Jumbotron -->
<div class="container-fluid tron">
  <div class="container">
    <div class="row main">
      <div class="col jumbo ydown">
        <h3>Technology Informasi</h3>
        <button class="btn bg-primary"><a href="#">Baca selengkapnya!</a></button>
      </div>
      <div class="col jumbo">
        <img src="img/pc.jpg" alt="" class="img-fluid">
      </div>
    </div>
  </div>
</div>
<!-- Akhir Jumbotron -->
<!-- Awal Preview Artikel -->
<div class="container-fluid">
  <div class="hcontent">
    <h3>Daftar Artikel Informasi</h3>
  </div>
  <div class="row conten">
    <?php foreach ($artikels as $artikel): ?>
      <div class="kartu text-center">
        <img src="img/<?= $artikel['gambar']; ?>" class="img-fluid text center" alt="">
        <div class="card-body">
          <h5 class="card-title"><?= $artikel['judul']; ?></h5>
          <hr>
          <button calss="btn bg-primary"><a href="post.php?id_article=<?= $artikel["id_article"]; ?>">Baca selengkapnya!</a></button>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>