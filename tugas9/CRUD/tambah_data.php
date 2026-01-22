<?php
require_once __DIR__ . '/../../tugas8/koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <h1>Input Data Produk</h1>
                <form action="../proses/proses.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="nama_produk" class="form-label">Nama Produk</label>
                        <input type="text" class="form-control" id="nama_produk" name="nama_produk" required>
                    </div>
                     <div class="mb-3">
                        <label for="harga" class="form-label">Harga Produk</label>
                        <input type="number" class="form-control" id="harga" name="harga" required>
                    </div>
                      <div class="mb-3">
                        <label for="stok" class="form-label">Stok Produk</label>
                        <input type="number" class="form-control" id="stok" name="stok" required>
                    </div>
                      <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi Produk</label>
                        <input type="text" class="form-control" id="deskripsi" name="deskripsi" required>
                    </div>
                           <div class="mb-3">
                        <label for="category" class="form-label">Kategori Produk</label>
                        <select class="form-select" id="category" name="category" required>
                            <option value="" selected disabled>Pilih Kategori</option>
                            <option value="Elektronik">Elektronik</option>
                            <option value="Pakaian">Pakaian</option>
                            <option value="Makanan">Makanan</option>
                            <option value="Minuman">Minuman</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                        <div class="mb-3">
                        <label for="image" class="form-label">Gambar Produk</label>
                        <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
       <script>
        let form = document.querySelector('form');
        form.addEventListener('submit', function(event) {
            let nama_produk = document.getElementById('nama_produk').value;
            let harga = document.getElementById('harga').value;
            let deskripsi = document.getElementById('deskripsi').value;
            let stok = document.getElementById('stok').value;
            let category = document.getElementById('category').value;
            if (!nama_produk || !harga || !deskripsi || !stok || !category) {
                event.preventDefault();
                alert('All fields are required.');
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</body >
</html >