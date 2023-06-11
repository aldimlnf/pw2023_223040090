
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up</title>
    <link rel="stylesheet" type="text/css" href="css/style1.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>
<body>
<div class="container">
<form action="" method="POST"class="login-email">
    <p style="font-size: 2.6rem; font-weight:850;margin-bottom:20px">Daftar Akun</p>
    <div class="input-group"><input type="text"  placeholder="nama" name="admin_name"></div>
    <div class="input-group"><input type="text"  placeholder="Username" name="username"></div>
    <div class="input-group"><input type="text"  placeholder="Email" name="email"></div>
    <div class="input-group"><input type="password"  placeholder="Password" name="password"></div>
    <div class="input-group"><button name="submit" class="btn">Daftar</button></div>
    <p class="login-register-text">Sudah Memiliki Akun? <a href="login.php">Login</a></p>
</form>
<?php 
              if(isset($_POST['submit'])){
                include 'koneksi.php';

                $admin_name = htmlspecialchars($_POST['admin_name']);
                $username = htmlspecialchars($_POST['username']);
                $email = htmlspecialchars($_POST['email']);
                $password = htmlspecialchars($_POST['password']);
                
                $sql = "INSERT INTO `tb_admin`(`admin_name`, `username`, `email`, `password`) VALUES ('$admin_name', '$username', '$email', '$password')";
                if (mysqli_query($conn, $sql)) {
                  // Redirect ke halaman login.php setelah pendaftaran berhasil
                  header("Location: login.php");
                  exit;
                }else { 
                  echo '<script>alert("Mendaftar Gagal");</script>'; }
              } 
            ?>
</div>

</body>
</html>