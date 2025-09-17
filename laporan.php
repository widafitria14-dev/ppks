<?php
$conn = mysqli_connect("localhost:3307", "root", "", "quiz");

function report($data) {
    global $conn;

    $nama = strtolower(stripslashes($data["nama"]));
    $tanggal = mysqli_real_escape_string($conn, $data["tanggal"]);
    $jenis = mysqli_real_escape_string($conn, $data["jenis"]);
    $kronologi = mysqli_real_escape_string($conn, $data["kronologi"]);

    $result = mysqli_query($conn, "SELECT nama FROM report WHERE nama='$nama'");
    if(mysqli_fetch_assoc($result)){
        echo "<script>alert('Laporan Sudah Terkirim!');</script>";
        return false;
    }

    mysqli_query($conn, "INSERT INTO report VALUES('', '$nama', '$tanggal', '$jenis', '$kronologi')");
    return mysqli_affected_rows($conn);
    
}
?>