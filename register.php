<?php
require 'function.php';
if (isset($_POST['register'])){
    if(registrasi($_POST) > 0 ){
        echo "<script>alert('Berhasil membuat akun');
        window.location='login.php';</script>";
    } else {
        echo mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="js/bootstrap.min.js" rel="stylesheet" />
    <link href="js/popper.min.js" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <title>XIS</title>

        <!--Link Style-->
        <link rel="stylesheet" href="stylerl.css" />

    <link rel="icon" href="assets/Asset 1.png" style="height: 70px" />
</head>
<body>
  <img src="assets/Group 48.jpg" alt="" style="height: 645px;">
  <img src="assets/Asset 1.png" alt="" class="logor">
  <div class="container-fluid">
    <div class="row">
      <div class="mrl col-6">
        <h1 class="hrl">Mari bersama-sama melakukan
          Pencegahan kekerasan seksual.</h1>
          <p class="prl">Terima kasih telah mendaftar di XIS.</p>
      </div>
      <div class="daftar">
      <div class="col-6">
    <form action="" method="post">
    <h3><b>Daftar Akun</b></h3>
        <div class="container"> 
        <label for="nama"><b>Nama Lengkap</b></label>
        <input type="text" placeholder="Masukkan Nama Lengkap" name="nama" id = "nama" required value="" class="inpt"><br>
        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Masukkan Email" name="email" id = "email" required value="" class="inpt"><br>
        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Masukkan password" name="password" id = "password" required value="" class="inpt"><br>
        <label for="password2"><b>Ulangi Password</b></label>
        <input type="password" placeholder="Masukkan ulang password" name="password2" id = "password2" required value="" class="inpt"><br>
        <button type="submit" name="register"><b>Daftar</b></button>
      </div>
      <p>Sudah punya akun?<a href="login.php">Login</a></p>
    </form>
  </div>
    </div>
  </div>
</div>

 <!-- Script -->
 <script>
    const navEl = document.querySelector(".navbar");

    window.addEventListener("scroll", () => {
      if (window.scrollY > 56) {
        navEl.classList.add("navbar-scroll");
      } else if (window.scrollY < 56) {
        navEl.classList.remove("navbar-scroll");
      }
    });
  </script>
  <!-- external js-->
  <script src="main.js"></script>
</body>
</html>