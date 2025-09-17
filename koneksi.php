<?php
// Konfigurasi koneksi ke database
$server = "localhost:3307"; // Ganti sesuai dengan nama server database Anda
$username = "root"; // Ganti dengan username database Anda
$password = ""; // Ganti dengan password database Anda
$database = "quiz"; // Ganti dengan nama database yang ingin Anda gunakan

// Membuat koneksi
$koneksi = new mysqli($server, $username, $password, $database);

// Memeriksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
    // Ambil nilai dari formulir
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$no1 = $_POST['no1'];
$no2 = $_POST['no2'];
$no3 = $_POST['no3'];
$no4 = $_POST['no4'];
$no5 = $_POST['no5'];
$no6 = $_POST['no6'];
$no7 = $_POST['no7'];

// Kunci jawaban
$answers = array(
  'no1' => 'c',
  'no2' => 'c',
  'no3' => 'b',
  'no4' => 'c',
  'no5' => 'c',
  'no6' => 'a',
  'no7' => 'a',
);

// Hitung skor
$score = 0;
foreach ($answers as $key => $value) {
  if ($_POST[$key] == $value) {
    $score++;
  }
}

// Simpan ke database
$sql = "INSERT INTO question (nama, kelas, no1, no2, no3, no4, no5, no6, no7, score) VALUES ('$nama', '$kelas', '$no1', '$no2', '$no3', '$no4', '$no5', '$no6', '$no7', '$score')";

if ($koneksi->query($sql) === TRUE) {
    echo "<script>alert('Berhasil mengisi Quiz');
    window.location='indexL.html';</script>";  // Arahkan ke halaman lain
} else {
  echo "Error: " . $sql . "<br>" . $koneksi->error;
}

$koneksi->close();

?>