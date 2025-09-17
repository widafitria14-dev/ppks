<?php
$conn = mysqli_connect("localhost:3307", "root", "", "quiz");

function registrasi($data) {
    global $conn;

    $nama = strtolower(stripslashes($data["nama"]));
    $email = mysqli_real_escape_string($conn, $data["email"]);
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    $result = mysqli_query($conn, "SELECT nama FROM registrasi WHERE nama='$nama'");
    if(mysqli_fetch_assoc($result)){
        echo "<script>alert('Email sudah terdaftar!');</script>";
        return false;
    }


    if($password !== $password2){
        echo "<script>alert('Konfirmasi password tidak sesuai!');</script>";
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    mysqli_query($conn, "INSERT INTO registrasi VALUES('', '$nama', '$email', '$password')");
    return mysqli_affected_rows($conn);
    
}
?>