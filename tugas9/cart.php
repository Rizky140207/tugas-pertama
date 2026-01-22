<?php
session_start();
require_once __DIR__ . '/../tugas8/koneksi.php';

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if (isset($_GET['action']) && $_GET['action'] == "add") {
    $id = $_GET['id'];

    if (!isset($_SESSION['cart'][$id])) {
        $_SESSION['cart'][$id] = 1;
    } else {
        $_SESSION['cart'][$id]++;
    }

    header("Location: cart.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Keranjang Belanja</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h3 class="mb-4 fw-bold">🛒 Keranjang Belanja</h3>

    <?php if (empty($_SESSION['cart'])) { ?>
        <div class="alert alert-warning">Keranjang masih kosong</div>
    <?php } else { ?>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Produk</th>
                    <th>Harga</th>
                    <th>Qty</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $grandTotal = 0;
                foreach ($_SESSION['cart'] as $id => $qty) {
                    $q = mysqli_query($koneksi, "SELECT * FROM products WHERE id='$id'");
                    $p = mysqli_fetch_assoc($q);

                    $total = $p['harga'] * $qty;
                    $grandTotal += $total;
                ?>
                <tr>
                    <td><?= $p['nama_produk']; ?></td>
                    <td>Rp <?= number_format($p['harga'], 0, ',', '.'); ?></td>
                    <td><?= $qty; ?></td>
                    <td>Rp <?= number_format($total, 0, ',', '.'); ?></td>
                </tr>
                <?php } ?>
                <tr class="fw-bold">
                    <td colspan="3" class="text-end">Grand Total</td>
                    <td>Rp <?= number_format($grandTotal, 0, ',', '.'); ?></td>
                </tr>
            </tbody>
        </table>
    <?php } ?>

    <a href="index.php" class="btn btn-secondary">Belanja Lagi</a>
</div>

</body>
</html>
