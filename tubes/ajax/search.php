<?php 
require('../koneksi.php');
$keyword = $_GET['keyword'];
$query = "SELECT * FROM 
                tb_article
                WHERE
                judul LIKE '%$keyword%'
                ";
$artikels = query($query);
?>
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