
<!-- Bagian Atas File admin.php atau kasir.php -->
<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark border-bottom border-warning">
        <div class="container">
            <span class="navbar-brand gold-text fw-bold">ROYAL MANAGEMENT</span>
            <a href="logout.php" class="btn btn-outline-warning btn-sm">Logout</a>
        </div>
    </nav>
    <div class="container mt-5">
        <!-- Isi konten asli kamu di sini, bungkus dengan <div class="card p-4"> -->
            <?php session_start(); ?>
<h2>Halaman Kasir</h2>
<form method="POST" action="proses_transaksi.php">
    Harga Barang: <input type="number" name="harga" required><br>
    Diskon (%): <input type="number" name="diskon" value="0"><br>
    Bayar: <input type="number" name="bayar" required><br>
    <button type="submit">Proses Transaksi</button>
</form>
<br><a href="logout.php">Logout</a>
