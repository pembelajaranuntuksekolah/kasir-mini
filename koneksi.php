<?php
$conn = mysqli_connect("localhost", "root", "", "mini_kasirr");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
