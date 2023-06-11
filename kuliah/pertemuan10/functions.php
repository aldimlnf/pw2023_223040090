<?php
// Sesuaikan dengan URL project kalian
define('BASE_URL', '/pw_223040090/kuliah/pertemuan11/pertemuan10/');

function koneksi()
{
  $conn = mysqli_connect('localhost', 'root', '', 'pw_223040090') or die('KONEKSI GAGAL!');
  return $conn;
}

function query($query)
{
  $conn = koneksi();
  $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function tambah($data){
  $con = koneksi();

  $nim = $data['nim'];
  $nama = $data['nama'];
  $email = $data['email'];
  $jurusan = $data['jurusan'];
  $gambar = $data['gambar'];

  $query = "INSERT INTO 
  mahasiswa 
  VALUES
  (null, '$nim', '$nama', '$email', '$jurusan', '$gambar')";
  mysqli_query($con,$query) or die (mysqli_error($con));

  return mysqli_affected_rows($con);
}

function dd($value)
{
  echo "<pre>";
  var_dump($value);
  echo "</pre>";
  die;
}

function uriIS($uri)
{
  return ($_SERVER["REQUEST_URI"] === $uri) ? 'active' : '';
}
