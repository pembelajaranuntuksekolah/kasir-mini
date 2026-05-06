<?php
session_start();
include "koneksi.php";

if (isset($_POST['username'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $data = mysqli_query($conn, "SELECT * FROM users WHERE username='$user' AND password='$pass'");
    if (mysqli_num_rows($data) > 0) {
        $d = mysqli_fetch_assoc($data);
        $_SESSION['role'] = $d['role'];
        $_SESSION['id_user'] = $d['id_user'];
        header("location:" . ($d['role'] == 'admin' ? "admin.php" : "kasir.php"));
    } else {
        echo "<script>alert('Login Gagal!'); window.location='login.php';</script>";
    }
}
?>