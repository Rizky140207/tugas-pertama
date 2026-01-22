<?php
require_once __DIR__ . '/../../tugas8/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $id         = $_POST['id'];
    $nama       = $_POST['nama_produk'];
    $harga      = $_POST['harga'];
    $stok       = $_POST['stok'];
    $deskripsi  = $_POST['deskripsi'];
    $category   = $_POST['category'];

    $queryOld = mysqli_query($koneksi, "SELECT image FROM products WHERE id='$id'");
    $oldData  = mysqli_fetch_assoc($queryOld);
    $oldImage = $oldData['image'];

    $namaFile = $oldImage;

    if (!empty($_FILES['image']['name'])) {

        $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        $namaFile = uniqid() . '.' . $ext;

        $folderTujuan = __DIR__ . '/../image/';

        if (!is_dir($folderTujuan)) {
            mkdir($folderTujuan, 0777, true);
        }

        if (move_uploaded_file($_FILES['image']['tmp_name'], $folderTujuan . $namaFile)) {

            if ($oldImage && file_exists($folderTujuan . $oldImage)) {
                unlink($folderTujuan . $oldImage);
            }

        } else {
            die("Gagal upload gambar");
        }
    }

    $query = "UPDATE products SET 
                nama_produk='$nama',
                harga='$harga',
                stok='$stok',
                deskripsi='$deskripsi',
                category='$category',
                image='$namaFile'
              WHERE id='$id'";

    $update = mysqli_query($koneksi, $query);

    if ($update) {
        header("Location: ../admin/halaman.php");
        exit;
    } else {
        echo "Gagal update data";
    }
}
?>
