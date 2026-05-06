<?php
session_start();
include "koneksi.php";

function hitungDiskon($harga, $diskon) {
    return $harga - ($harga * ($diskon / 100));
}

if (isset($_POST['harga'])) {
    $harga = $_POST['harga'];
    $diskon = $_POST['diskon'];
    $bayar = $_POST['bayar'];
    $user_id = $_SESSION['id_user'];

    $total = hitungDiskon($harga, $diskon);
    $kembalian = $bayar - $total;

    if ($bayar < $total) {
        echo "<script>alert('Uang tidak cukup!'); window.history.back();</script>";
    } else {
        mysqli_query($conn, "INSERT INTO transaksi (total, bayar, kembalian, user_id) 
                             VALUES ('$total', '$bayar', '$kembalian', '$user_id')");
        
        echo "<h3>Transaksi Berhasil</h3>";
        echo "Total Belanja: Rp $total <br>";
        echo "Dibayar: Rp $bayar <br>";
        echo "Kembalian: Rp $kembalian <br>";
        echo "<a href='kasir.php'>Kembali</a> | <a href='tampil_transaksi.php'>Lihat Riwayat</a>";
    }
}
?>