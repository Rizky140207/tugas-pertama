<?php
session_start();
require_once __DIR__ . '/../tugas8/koneksi.php';

if (!isset($_GET['id'])) {
    die("Produk tidak ditemukan");
}

$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM products WHERE id='$id'");
$data = mysqli_fetch_assoc($query);

if (!$data) {
    die("Data tidak ada");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Detail Produk</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow border-0">
                <div class="row g-0">
                    <div class="col-md-5 text-center p-3">
                        <img src="image/<?= $data['image']; ?>" 
                             class="img-fluid"
                             style="max-height:300px; object-fit:contain;">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <h4 class="fw-bold"><?= $data['nama_produk']; ?></h4>
                            <p class="text-success fw-bold fs-5">
                                Rp <?= number_format($data['harga'], 0, ',', '.'); ?>
                            </p>
                            <p><?= $data['deskripsi']; ?></p>

                            <a href="cart.php?action=add&id=<?= $data['id']; ?>" 
                               class="btn btn-primary">
                                + Tambah ke Keranjang
                            </a>

                            <a href="index.php" class="btn btn-secondary">
                                Kembali
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
