<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            border-radius: 12px;
        }
        label {
            font-weight: 500;
        }
        img {
            border-radius: 8px;
            border: 1px solid #ddd;
        }
    </style>
</head>

<body>

<?php
require_once __DIR__ . '/../../tugas8/koneksi.php';

if (!isset($_GET['id'])) {
    die("ID tidak ditemukan");
}

$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM products WHERE id='$id'");
$d = mysqli_fetch_assoc($query);

if (!$d) {
    die("Data tidak ditemukan");
}
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7">

            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white text-center">
                    <h4 class="mb-0">Edit Produk</h4>
                </div>

                <div class="card-body">
                    <form action="../proses/proses_edit.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $d['id']; ?>">

                        <div class="mb-3">
                            <label>Nama Produk</label>
                            <input type="text" name="nama_produk" class="form-control"
                                value="<?= $d['nama_produk']; ?>" required>
                        </div>

                        <div class="mb-3">
                            <label>Harga</label>
                            <input type="number" name="harga" class="form-control"
                                value="<?= $d['harga']; ?>" required>
                        </div>

                        <div class="mb-3">
                            <label>Deskripsi</label>
                            <textarea name="deskripsi" rows="4" class="form-control" required><?= $d['deskripsi']; ?></textarea>
                        </div>

                        <div class="mb-3">
                            <label>Stok</label>
                            <input type="number" name="stok" class="form-control"
                                value="<?= $d['stok']; ?>" required>
                        </div>

                        <div class="mb-3">
                            <label>Category</label>
                            <input type="text" name="category" class="form-control"
                                value="<?= $d['category']; ?>" required>
                        </div>

                        <div class="mb-3">
                            <label>Gambar Saat Ini</label><br>
                            <?php if (!empty($d['image'])) { ?>
                                <img src="../image/<?= $d['image']; ?>" width="120" class="mb-2">
                            <?php } else { ?>
                                <p class="text-muted">Tidak ada gambar</p>
                            <?php } ?>
                        </div>

                        <div class="mb-3">
                            <label>Ganti Gambar</label>
                            <input type="file" name="image" class="form-control">
                            <small class="text-muted">Biarkan kosong jika tidak ingin mengganti gambar</small>
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="../index.php" class="btn btn-secondary">Kembali</a>
                            <button type="submit" class="btn btn-success">Simpan Perubahan</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
