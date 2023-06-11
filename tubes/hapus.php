<?php
require('koneksi.php');

// Hapus data kesehatan
$id_article = $_GET["id_article"];

if( hapusartikel($id_article) > 0 ) {
  echo "
      <script>
          alert('Artikel berhasil dihapus!');
          document.location = 'article.php';
      </script>
  ";
} else {
  echo "
      <script>
          alert('Artikel gagal dihapus!');
          document.location = 'article.php';
      </script>
  ";
}
?>