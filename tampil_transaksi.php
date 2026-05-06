<?php include "koneksi.php"; ?>
<h3>Riwayat Transaksi</h3>
<table border="1">
    <tr><th>Tanggal</th><th>Total</th><th>Bayar</th><th>Kembali</th></tr>
    <?php
    $data = mysqli_query($conn, "SELECT * FROM transaksi ORDER BY tanggal DESC");
    while ($d = mysqli_fetch_array($data)) {
        echo "<tr>
                <td>{$d['tanggal']}</td>
                <td>{$d['total']}</td>
                <td>{$d['bayar']}</td>
                <td>{$d['kembalian']}</td>
              </tr>";
    }
    ?>
</table>
<br><a href="kasir.php">Kembali</a>
