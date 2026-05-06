<!DOCTYPE html>
<html>
<head>
    <title>Login | Luxury Cashier</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Poppins:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body class="d-flex align-items-center vh-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card p-4 text-center">
                    <h2 class="gold-text mb-4">ROYAL KASIR</h2>
                    <p class="text-muted small">Silakan masuk ke sistem eksklusif Anda</p>
                    <form method="POST" action="proses_login.php">
                        <div class="mb-3 text-start">
                            <label class="form-label small">Username</label>
                            <input type="text" name="username" class="form-control" required>
                        </div>
                        <div class="mb-4 text-start">
                            <label class="form-label small">Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-luxury w-100 py-2">LOGIN</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>