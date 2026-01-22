<?php
require_once __DIR__ . '/../../tugas8/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name        = $_POST['nama_produk'];
    $price       = $_POST['harga'];
    $stok        = $_POST['stok'];
    $description = $_POST['deskripsi'];
    $category    = $_POST['category'];

    if (empty($name) || empty($price) || empty($stok) || empty($description) || empty($category)) {
        die("All fields are required.");
    }

    $imageName = null;

    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {

        $fileTmpPath = $_FILES['image']['tmp_name'];
        $fileName    = $_FILES['image']['name'];
        $fileNameCmps = explode(".", $fileName);
        $fileExtension = strtolower(end($fileNameCmps));

        $allowedfileExtensions = ['jpg', 'jpeg', 'png', 'gif', 'webp'];

        if (in_array($fileExtension, $allowedfileExtensions)) {

            $newFileName = md5(time() . $fileName) . '.' . $fileExtension;

            $uploadFileDir = __DIR__ . '/../image/';
            $dest_path = $uploadFileDir . $newFileName;

            if (move_uploaded_file($fileTmpPath, $dest_path)) {
                $imageName = $newFileName;
            } else {
                die("Gagal upload gambar");
            }

        } else {
            die("Format gambar tidak diizinkan");
        }

    } else {
        die("Gambar wajib diupload");
    }

    $query = "INSERT INTO products 
              (nama_produk, harga, stok, deskripsi, category, image) 
              VALUES 
              ('$name', '$price', '$stok', '$description', '$category', '$imageName')";

    $result = mysqli_query($koneksi, $query);

    if ($result) {
        header("Location: ../admin/halaman.php");
        exit;
    } else {
        die("Gagal menyimpan data: " . mysqli_error($koneksi));
    }
}
?>
