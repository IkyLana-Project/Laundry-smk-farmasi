<?php
    error_reporting(0);
 if(isset($_POST['login'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];
    if($user=='userlsp' AND $pass =='smkfarmasibjm'){
        echo'<script>window.location = "home.php"</script>';
    }else{
        $salah = '<p style="font-weight: bold;
            color: red;">Kesalahan pada Username / Password</p>';
    }
 }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <div class="Logo">
        <img src="gambar/laundry2.avif">
    </div>
    <h3 align="center" style="font-size: 25px;">SELAMAT DATANG DI LAUNDRY</BR> SMK FARMASI BANJARMASIN</h3>

  <main id="all-content">
    <div class="login-error">
        <?php echo $salah; ?>
    </div>
    
    <form id="login" action="" method="POST">
      <input type="text" name="username" id="username-field" class="login-form" placeholder="Username">
      <input type="password" name="password" id="password-field" class="login-form" placeholder="Password">
      <input type="submit" value="Register" id="register">
      <input type="submit" name="login" value="Login" id="submit">
    </form>
  
  </main>

</body>

</html>