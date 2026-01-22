<?php
require_once __DIR__ . '/../../tugas8/koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM products WHERE id = $id");

header("location: ../admin/halaman.php");
?>