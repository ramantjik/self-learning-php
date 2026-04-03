<?php

if( !isset($_GET['item']) ||
    !isset($_GET['kode']) ||
    !isset($_GET['jenis']) ||
    !isset($_GET['harga']) ||
    !isset($_GET['gambar'])) {
    // redirect
    header("Location: latihan1.php");
    exit;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk</title>
</head>
<body>
    
<ul>
    <li><img src="img/<?= $_GET["gambar"]; ?>" alt=""></li>
    <li><?= $_GET["item"]; ?></li>
    <li><?= $_GET["kode"]; ?></li>
    <li><?= $_GET["jenis"]; ?></li>
    <li><?= $_GET["harga"]; ?></li>
</ul>

<a href="latihan1.php">Kembali ke Halaman Daftar Produk</a>
</body>
</html>