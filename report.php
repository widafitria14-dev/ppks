<?php
require 'laporan.php';
if (isset($_POST['report'])){
    if(report($_POST) > 0 ){
        echo "<script>alert('Berhasil mengirim laporan');
        window.location='indexL.html';</script>";
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
        <link rel="stylesheet" href="style.css" />

    <link rel="icon" href="assets/Asset 1.png" style="height: 70px" />
</head>
<body>
    <div class="bgreport">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="padreport text-collection text-center">
                    <h1 class="hreport">No Mean No</h1>
                    <p class="preport">Mari kita cegah kekerasan seksual 
                        <br>dengan melaporkannya!</p>
                    </div>
                </div>
                <div class="col-6">
                    <form action="" method="post">
                        <div class="frm container">
                            <label for="namapelapor" class="lbl">Nama Pelapor</label><br>
                            <input type="text" placeholder="Masukkan Namamu" name="nama" id="lapor" required value="" class="inpt"><br>
                            <label for="namapelapor" class="lbl">Tanggal Insiden</label><br>
                            <input type="text" placeholder="YY-MM-DD" name="tanggal" id="lapor" required value="" class="inpt"><br>
                            <label for="namapelapor" class="lbl">Jenis Insiden</label><br>
                            <input type="text" placeholder="Beritahukan jenis insiden yang kamu lihat atau kamu rasakan" name="jenis" id="lapor" required value="" class="inpt"><br>
                            <label for="namapelapor" class="lbl">Kronologi Insiden</label><br>
                            <input type="text" placeholder="Ceritakan singkat kronologi dari insiden tersebut !" name="kronologi" id="lapor" required value="" class="inptt"><br>
                            <button type="submit" name="report" class="btnlpr">Lapor</button>
                        </div>
                    </form>
                </div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="text-center text-lg-start text-muted pt-md-5">
    <section class="textfoot">
      <div class="container text-center text-md-start mt-5">
        <div class="row mt-3">
          <div class="col-md-3 col-lg-3 col-md-2 mx-auto mb-4">
            <h6 class="text-uppercase fw-bold mb-4">PPKS</h6>
            <p>
              Pencegahan dan Penanganan Kekerasan Seksual
            </p>
          </div>
  
          <div class="col-md-2 col-lg-2 col-md-2 mx-auto mb-4">
            <h6 class="text-uppercase fw-bold mb-4">
              ALAMAT
            </h6>
            <p>
              <a href="" class="text-reset text-decoration-none">Jl. Srengseng Sawah Raya No.17, RT.8/RW.3, Srengseng Sawah, Kec. Jagakarsa, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12630</a>
            </p>
          </div>
          <div class="col-md-3 col-lg-3 col-md-2 mx-auto mb-4">
            <h6 class="text-uppercase fw-bold mb-4">
              MEDIA SOSIAL
            </h6>
            <div>
            <p>
              <i class="bi bi-instagram"><a href="" class="text-reset text-decoration-none">ppkspolimedia2024</a></i>
            </p></div>
            <div>
            <p>
              <i class="bi bi-envelope"><a href="" class="text-reset text-decoration-none">ppkspolmed@gmail.com</a></i>
            </p></div>  
          </div>
        </div>
      </div>
  </footer>
</body>
</html>