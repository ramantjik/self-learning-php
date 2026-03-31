<?php
// $mahasiswa = [
//     ['Moch. Rahadian Amantjik', '13421084', 'Teknik Industri', 'rahamantjik@gmail.com'],
//     ['Ajim', '13421084', 'Teknik Industri', 'rahamantjik@gmail.com'],
//     ['Zaki', '13421084', 'Teknik Industri', 'rahamantjik@gmail.com'],
//     ['Naufal', '13421084', 'Teknik Industri', 'rahamantjik@gmail.com']
//     ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
        "nama" => "Moch. Rahadian Amantjik",
        "nim" => "13421084",
        "email" => "rahamantjik@gmail.com",
        "jurusan" => "Teknik Industri",
        "gambar" => "raha.jpg"
    ],
    [
        "nama" => "Nurcholis Madjid",
        "nim" => "13421081",
        "email" => "ajim@gmail.com",
        "jurusan" => "Teknik Industri",
        "gambar" => "raha.jpg"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>

<?php foreach($mahasiswa as $mhs) : ?>
    <ul>
        <?php foreach($mhs as $m) : ?>
            <li><?= $m; ?></li>
        <?php endforeach; ?>
    </ul>
<?php endforeach; ?>    
</body>
</html>