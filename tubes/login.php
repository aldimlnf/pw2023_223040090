<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style1.css">
</head>
<body>
<div class="container">
<form action="" method="POST"class="login-email">
    <p style="font-size: 3rem; font-weight:850; margin-bottom:20px; ">LOGIN</p>
    <div class="input-group"><input type="text" placeholder="username" name="username" required></div>
    <div class="input-group"><input type="password" placeholder="Password" name="password"></div>
    <div class="input-group"><button name="submit" class="btn">Login</button></div>
    <p class="login-register-text">Tidak Memiliki Akun? <a href="sign.php">Daftar</a></p>
</form>
<?php 
            if(isset($_POST['submit'])){
                session_start();
                include 'koneksi.php';
                

                $username = mysqli_real_escape_string($conn, $_POST['username']);
                $pass = mysqli_real_escape_string($conn, $_POST['password']);

                $cek = mysqli_query($conn, "SELECT * FROM tb_admin WHERE username = '".$username."' AND password = '".($pass)."'");
                if(mysqli_num_rows($cek) > 0){
                    $d = mysqli_fetch_object($cek);
                    $_SESSION['status_login'] = true;
                    $_SESSION['a_global'] = $d;
                    $_SESSION['id'] = $d->admin_id;
                    echo '<script>window.location="dashboard.php"</script>';
                }else{
                    echo '<script>alert("Username atau password anda salah!")</script>';
                }
            }
        ?>

</div>

</body>
</html>