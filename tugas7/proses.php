<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['nama_produk'];
        $price = $_POST['harga'];
        $stok = $_POST['stok'];
        $description = $_POST['deskripsi'];
        $category = $_POST['category'];

        if(empty($name) || empty($price) || empty($stok) || empty($description) || empty($category)) {
            die("All fields are required.");
        }

        if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
            $fileTmpPath = $_FILES['image']['tmp_name'];
            $fileName = $_FILES['image']['name'];
            $fileSize = $_FILES['image']['size'];
            $fileType = $_FILES['image']['type'];
            $fileNameCmps = explode(".", $fileName); 
            $fileExtension = strtolower(end($fileNameCmps));

            $newFileName = md5(time() . $fileName) . '.' . $fileExtension;

            $allowedfileExtensions = ['jpg', 'gif', 'png', 'jpeg', 'webp'];
            if (in_array($fileExtension, $allowedfileExtensions)) {
                $uploadFileDir = './images/';
                $dest_path = $uploadFileDir . $newFileName;

                if(move_uploaded_file($fileTmpPath, $dest_path)) {
                    echo "File is successfully uploaded.<br>";
                } else {
                    echo "There was some error moving the file to upload directory.<br>";
                }
            } else {
                echo "Upload failed. Allowed file types: " . implode(',', $allowedfileExtensions) . "<br>";
            }
        } else {
            echo "No file uploaded or there was an upload error.<br>";
        }

        echo "<h2>Submitted Data:</h2>";
        echo "Nama Produk: " . htmlspecialchars($name) . "<br>";
        echo "Harga Produk: " . htmlspecialchars($price) . "<br>";
        echo "Stok Produk: " . htmlspecialchars($stok) . "<br>";
        echo "Deskripsi Produk: " . htmlspecialchars($description) . "<br>";
        echo "Kategori Produk: " . htmlspecialchars($category) . "<br>";
        echo "Gambar Produk: <img src='images/" . htmlspecialchars($newFileName) . "' alt='Product Image'><br>";
    } else {
        echo "Invalid request method.";
    }
?>