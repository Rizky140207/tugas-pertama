<?php
include "koneksi.php";

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
    <title>Produk</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body class="bg-light">

<div class="container mt-5">

    <h2 class="text-center mb-4 fw-bold">🛒 Daftar Produk</h2>

    <form method="GET" class="row justify-content-center mb-4">
        <div class="col-md-4">
            <select name="category" class="form-select shadow-sm" onchange="this.form.submit()">
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

    <div class="row g-4">
        <?php
        $no = 1;
        while ($result = mysqli_fetch_array($sql)) {
        ?>
            <div class="col-md-4 col-sm-6">
                <div class="card h-100 shadow-sm border-0">
                    <img src="gambar/<?php echo $result['image']; ?>" 
                         class="card-img-top p-3"
                         style="height:220px; object-fit:contain;"
                         alt="<?php echo $result['nama_produk']; ?>">

                    <div class="card-body text-center">
                        <h5 class="card-title fw-semibold">
                            <?php echo $result['nama_produk']; ?>
                        </h5>
                        <p class="card-text text-success fw-bold">
                            Rp <?php echo number_format($result['harga'], 0, ',', '.'); ?>
                        </p>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>

</div>

</body>
</html>
