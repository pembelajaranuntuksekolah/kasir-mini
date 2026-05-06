<?php 
include "koneksi.php"; 
// Proses Simpan
if (isset($_POST['nama'])) {
    $nama = $_POST['nama']; $harga = $_POST['harga']; $stok = $_POST['stok'];
    mysqli_query($conn, "INSERT INTO barang (nama_barang, harga, stok) VALUES ('$nama', '$harga', '$stok')");
}
?>

<h3>Kelola Barang</h3>
<form method="POST">
    Nama: <input type="text" name="nama" required>
    Harga: <input type="number" name="harga" required>
    Stok: <input type="number" name="stok" required>
    <button type="submit">Simpan</button>
</form>

<hr>
<table border="1">
    <tr><th>Nama</th><th>Harga</th><th>Stok</th><th>Aksi</th></tr>
    <?php
    $data = mysqli_query($conn, "SELECT * FROM barang");
    while ($d = mysqli_fetch_array($data)) {
        echo "<tr>
                <td>{$d['nama_barang']}</td>
                <td>Rp {$d['harga']}</td>
                <td>{$d['stok']}</td>
                <td><a href='hapus_barang.php?id={$d['id_barang']}'>Hapus</a></td>
              </tr>";
    }
    ?>
</table>
<br><a href="admin.php">Kembali</a>