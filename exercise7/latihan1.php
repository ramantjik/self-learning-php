<?php
// Variable Scope
// $x = 19;

// function tampilX() {
//     global $x;
//     echo $x;
// }

// tampilX();

// SUPERGLOBALS
// variabel global milik PHP
// merupakan array associative

// echo $_SERVER["SERVER_NAME"];


// $_GET

$produk = [
    [
        "kode" => "PRD001",
        "item" => "Sunscreen Ceria",
        "jenis" => "Skin Care",
        "harga" => "49.999",
        "gambar" => "sunscreen.png"

    ],
    [
        "kode" => "PRD002",
        "item" => "Body Wash Mangga",
        "jenis" => "Body Care",
        "harga" => "29.999",
        "gambar" => "bodywash.png"
    ]
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Produk</h1>
    <ul>
    <?php foreach( $produk as $prd ) : ?>
        <li>
            <a href="latihan2.php?item=<?= $prd['item']; ?>&kode=<?= $prd["kode"]; ?>&jenis=<?= $prd["jenis"]; ?>&harga= <?= $prd["harga"] ?>&gambar=<?= $prd["gambar"]; ?>"><?= $prd['item']; ?></a>
        </li>
    <?php endforeach; ?>
    </ul>
</body>
</html>