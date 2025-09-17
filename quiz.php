<?php

// Ambil nilai dari formulir
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];

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
        <link rel="stylesheet" href="quiz.css" />

    <link rel="icon" href="assets/Asset 1.png" style="height: 70px" />
</head>
<body>
  <div class="bgquiz">
    <img src="assets/Group 51.png" alt="" class="imgquiz">
    <div class="container-fluid">
      <div class="container">
        <div class="imgquiz2">
            <form action="koneksi.php" method="post">
            <input type="text" id="nama" value="<?php echo $nama?>" name="nama" placeholder="Nama" hidden>
            <input type="text" id="kelas" name="kelas" value="<?php echo $kelas?>" placeholder="Kelas" hidden>
          <div class="row">
                    <div class="col-12">
                        <div class="text-collection text-center">
                            <div class="rect1">
                            <h4 class="hrect1">1</h4>
                        </div>
                            </div>
                <h5 class="hquiz">Mana yang merupakan prinsip desain yang penting untuk tampilan visual yang baik pada website PPKS?
                </h5>
            </div>
            <div class="mgquiz">
            <div class="row">
            <div class="col-6">
                <div class="btnquiz form-check">
                    <input class="btnr form-check-input" type="radio" value="a" name="no1" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                    A. Overloading dengan informasi
                    </label>
            </div>
            </div>
            <div class="col-6">
                <div class="btnquiz2 form-check">
                    <input class="btnr form-check-input" type="radio" value="b" name="no1" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                    B. Kontras yang rendah
                    </label>
            </div>
            </div>
        </div>
            <div class="row">
            <div class="col-6">
                <div class="btnquiz form-check">
                    <input class="btnr form-check-input" type="radio" value="c" name="no1" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                    C. Kesesuaian warna
                    </label>
            </div>
            </div>
            <div class="col-6">
                <div class="btnquiz2 form-check">
                    <input class="btnr form-check-input" type="radio" value="d" name="no1" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                    D. Font yang sulit dibaca
                    </label>
            </div>
            </div>
        </div>
    </div>
        </div>

          <div class="padq row">
                    <div class="col-12">
                        <div class="text-collection text-center">
                            <div class="rect1">
                            <h4 class="hrect1">2</h4>
                        </div>
                            </div>
                <h5 class="hquiz">Mengapa penting untuk memiliki konsistensi dalam tampilan visual sebuah website?
                </h5>
            </div>
            <div class="mgquiz">
            <div class="row">
            <div class="col-6">
                <div class="btnquiz form-check">
                    <input class="btnr form-check-input" type="radio" value="a" name="no2" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                    A. Memperkeruh pengalaman pengguna
                    </label>
            </div>
            </div>
            <div class="col-6">
                <div class="btnquiz2 form-check">
                    <input class="btnr form-check-input" type="radio" value="b" name="no2" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                    B. Meningkatkan kepercayaan pengguna
                    </label>
            </div>
            </div>
        </div>
            <div class="row">
            <div class="col-6">
                <div class="btnquiz form-check">
                    <input class="btnr form-check-input" type="radio" value="c" name="no2" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                    C. Menambah kesulitan dalam navigasi
                    </label>
            </div>
            </div>
            <div class="col-6">
                <div class="btnquiz2 form-check">
                    <input class="btnr form-check-input" type="radio" value="d" name="no2" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                    D. Mengurangi waktu muat halaman
                    </label>
            </div>
            </div>
        </div>
    </div>
        </div>

          <div class="padq row">
              <div class="col-12">
                        <div class="text-collection text-center">
                            <div class="rect1">
                            <h4 class="hrect1">3</h4>
                        </div>
                            </div>
                <h5 class="hquiz">Pada kedua website memiliki pemilihan font (tipografi) yang berbeda,<br>seberapa penting pemilihan font yang tepat dalam desain visual website?
                </h5>
            </div>
            <div class="mgquiz">
            <div class="row">
            <div class="col-6">
                <div class="btnquiz form-check">
                    <input class="btnr form-check-input" type="radio" value="a" name="no3" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                    A. Karena semua font memiliki tampilan yang sama
                    </label>
            </div>
            </div>
            <div class="col-6">
                <div class="btnquiz3 form-check">
                    <input class="btnr form-check-input" type="radio" value="b" name="no3" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                    B. Karena font tidak memengaruhi kesan dan keterbacaan teks pada website
                    </label>
            </div>
            </div>
        </div>
            <div class="row">
            <div class="col-6">
                <div class="btnquiz4 form-check">
                    <input class="btnr form-check-input" type="radio" value="c" name="no3" id="flexRadioDefault1">
                    <label class="lblq form-check-label" for="flexRadioDefault1">
                    C. Karena font dapat memengaruhi suasana dan keterbacaan teks pada website
                    </label>
            </div>
            </div>
            <div class="col-6">
                <div class="btnquiz3 form-check">
                    <input class="btnr form-check-input" type="radio" value="d" name="no3" id="flexRadioDefault1">
                    <label class="lblq form-check-label" for="flexRadioDefault1">
                    D. Karena font hanya berpengaruh pada bagian grafis dari website
                    </label>
            </div>
            </div>
        </div>
    </div>
        </div>

          <div class="padq row">
              <div class="col-12">
                        <div class="text-collection text-center">
                            <div class="rect1">
                            <h4 class="hrect1">4</h4>
                        </div>
                            </div>
                <h5 class="hquiz">Mengapa penggunaan warna yang konsisten penting dalam desain visual website?
                </h5>
            </div>
            <div class="mgquiz">
            <div class="row">
            <div class="col-6">
                <div class="btnquiz4 form-check">
                    <input class="btnr form-check-input" type="radio" value="a" name="no4" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                    A. Untuk membuat website terlihat lebih rumit
                    </label>
            </div>
            </div>
            <div class="col-6">
                <div class="btnquiz2 form-check">
                    <input class="btnr form-check-input" type="radio" value="b" name="no4" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                    B. Untuk meningkatkan kesan artistik
                    </label>
            </div>
            </div>
        </div>
            <div class="row">
            <div class="col-6">
                <div class="btnquiz4 form-check">
                    <input class="btnr form-check-input" type="radio" value="c" name="no4" id="flexRadioDefault1">
                    <label class="lblq form-check-label" for="flexRadioDefault1">
                    C. Untuk memberikan keterbacaan yang baik dan konsistensi visual
                    </label>
            </div>
            </div>
            <div class="col-6">
                <div class="btnquiz2 form-check">
                    <input class="btnr form-check-input" type="radio" value="d" name="no4" id="flexRadioDefault1">
                    <label class="lblq form-check-label" for="flexRadioDefault1">
                    D. Untuk mengurangi daya tarik visual
                    </label>
            </div>
            </div>
        </div>
    </div>
        </div>

          <div class="padq row">
              <div class="col-12">
                        <div class="text-collection text-center">
                            <div class="rect1">
                            <h4 class="hrect1">5</h4>
                        </div>
                            </div>
                <h5 class="hquiz">Apa yang dimaksud dengan hierarki visual dalam desain web?                 
                </h5>
            </div>
            <div class="mgquiz">
            <div class="row">
            <div class="col-6">
                <div class="btnquiz form-check">
                    <input class="btnr form-check-input" type="radio" value="a" name="no5" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                    A. Penggunaan font yang berbeda
                    </label>
            </div>
            </div>
            <div class="col-6">
                <div class="btnquiz2 form-check">
                    <input class="btnr form-check-input" type="radio" value="b" name="no5" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                    B. Tata letak yang tidak teratur
                    </label>
            </div>
            </div>
        </div>
            <div class="row">
            <div class="col-6">
                <div class="btnquiz form-check">
                    <input class="btnr form-check-input" type="radio" value="c" name="no5" id="flexRadioDefault1">
                    <label class="lblq form-check-label" for="flexRadioDefault1">
                    C. Penggunaan gambar yang berlebihan
                    </label>
            </div>
            </div>
            <div class="col-6">
                <div class="btnquiz2 form-check">
                    <input class="btnr form-check-input" type="radio" value="d" name="no5" id="flexRadioDefault1">
                    <label class="lblq form-check-label" for="flexRadioDefault1">
                    D. Ketertarikan yang merata pada semua elemen
                    </label>
            </div>
            </div>
        </div>
    </div>
        </div>

          <div class="padq row">
              <div class="col-12">
                        <div class="text-collection text-center">
                            <div class="rect1">
                            <h4 class="hrect1">6</h4>
                        </div>
                            </div>
                <h5 class="hquiz">Website PPKS memiliki tampilan responsive design, apa yang dimaksud dengan<br>"responsive design" dalam konteks tampilan visual sebuah website?
                </h5>
            </div>
            <div class="mgquiz">
            <div class="row">
            <div class="col-6">
                <div class="btnquiz4 form-check">
                    <input class="btnr form-check-input" type="radio" value="a" name="no6" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                    A. Desain yang menyesuaikan dengan ukuran layar pengguna
                    </label>
            </div>
            </div>
            <div class="col-6">
                <div class="btnquiz3 form-check">
                    <input class="btnr form-check-input" type="radio" value="b" name="no6" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                    B. Desain tanpa respons terhadap umpan balik pengguna
                    </label>
            </div>
            </div>
        </div>
            <div class="row">
            <div class="col-6">
                <div class="btnquiz form-check">
                    <input class="btnr form-check-input" type="radio" value="c" name="no6" id="flexRadioDefault1">
                    <label class="lblq form-check-label" for="flexRadioDefault1">
                    C. Desain yang statis dan tidak dapat diubah
                    </label>
            </div>
            </div>
            <div class="col-6">
                <div class="btnquiz3 form-check">
                    <input class="btnr form-check-input" type="radio" value="d" name="no6" id="flexRadioDefault1">
                    <label class="lblq form-check-label" for="flexRadioDefault1">
                    D. Desain yang hanya cocok untuk penggunaan<br>desktop
                    </label>
            </div>
            </div>
        </div>
    </div>
        </div>

          <div class="padq row">
              <div class="col-12">
                        <div class="text-collection text-center">
                            <div class="rect1">
                            <h4 class="hrect1">7</h4>
                        </div>
                            </div>
                <h5 class="hquiz">Elemen desain yang memiliki suatu penekanan bagian tertentu<br>dari suatu desain yang terlihat menonjol dibandingkan elemen lainnya merupakan
                </h5>
            </div>
            <div class="mgquiz">
            <div class="row">
            <div class="col-6">
                <div class="btnquiz form-check">
                    <input class="btnr form-check-input" type="radio" value="a" name="no7" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                    A. Emphasize
                    </label>
            </div>
            </div>
            <div class="col-6">
                <div class="btnquiz2 form-check">
                    <input class="btnr form-check-input" type="radio" value="b" name="no7" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                    B. Size
                    </label>
            </div>
            </div>
        </div>
            <div class="row">
            <div class="col-6">
                <div class="btnquiz form-check">
                    <input class="btnr form-check-input" type="radio" value="c" name="no7" id="flexRadioDefault1">
                    <label class="lblq form-check-label" for="flexRadioDefault1">
                    C. Balance
                    </label>
            </div>
            </div>
            <div class="col-6">
                <div class="btnquiz2 form-check">
                    <input class="btnr form-check-input" type="radio" value="d" name="no7" id="flexRadioDefault1">
                    <label class="lblq form-check-label" for="flexRadioDefault1">
                    D. Proportion
                    </label>
            </div>
            </div>
        </div>
            <div class="row">
            <div class="col-6">
                <button type="submit" class="btns">Kirim</button>
            </div>
            </div>
        </div>
    </div>
        </div>

    </form>
             </div>
        </div>
    </div>
    </div>
</body>
</html>