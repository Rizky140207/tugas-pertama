<?php
require_once __DIR__ . '/../../tugas8/koneksi.php';

if (isset($_GET['category']) && $_GET['category'] != "") {
    $category = $_GET['category'];
    $query = "SELECT * FROM products WHERE category = '$category'";
} else {
    $query = "SELECT * FROM products";
}

$sql = mysqli_query($koneksi, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Produk E-Commerce</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body class="bg-light">
<div class="container mt-4">
    <h2 class="text-center mb-4">Daftar Produk</h2>
    <form method="GET" class="row justify-content-center mb-4">
        <div class="col-md-4">
            <select name="category" class="form-select" onchange="this.form.submit()">
                <option value="">Semua Kategori</option>
                <option value="Elektronik" <?= (isset($_GET['category']) && $_GET['category'] == "Elektronik") ? "selected" : ""; ?>>
                    Elektronik
                </option>
                <option value="Aksesoris" <?= (isset($_GET['category']) && $_GET['category'] == "Aksesoris") ? "selected" : ""; ?>>
                    Aksesoris
                </option>
            </select>
        </div>
    </form>
     <h3>
            <a href="../CRUD/tambah_data.php">
                <input type="submit" value="Tambah Data" name="proses">
            </a>
        </h3>
    <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle text-center bg-white">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Deskripsi</th>
                    <th>Stok</th>
                    <th>Kategori</th>
                    <th>Gambar</th>
                    <th>CRUD</th
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                while ($result = mysqli_fetch_array($sql)) {
                ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $result['nama_produk']; ?></td>
                    <td>Rp <?= number_format($result['harga']); ?></td>
                    <td><?= $result['deskripsi']; ?></td>
                    <td><?= $result['stok']; ?></td>
                    <td><?= $result['category']; ?></td>
                    <td>
                        <img src="../image/<?= $result['image']; ?>" width="80" class="img-thumbnail">
                    </td>
                      <td class="crud">
                    <a href="../CRUD/edit.php?id=<?php echo $result['id']; ?>">Edit</a>
                    <a href="../CRUD/delete.php?id=<?php echo $result['id']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

</div>

</body>
</html>
