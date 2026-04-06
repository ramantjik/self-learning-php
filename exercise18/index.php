<?php

session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
}
require 'functions.php';

if(isset($_GET['reset'])) {
    unset($_SESSION['cari']);
    header("Location: index.php");
    exit;
}

// tombol cari ditekan
if(isset($_POST['cari'])) {
    $cari = $_POST['keyword'];
    $_SESSION['cari'] = $cari;
} else {
    $cari = isset($_SESSION['cari']) ? $_SESSION['cari'] : '';;
}

$query =    "SELECT * FROM mahasiswa
                    WHERE
                nama LIKE '%$cari%' OR
                nim LIKE '%$cari%' OR
                email LIKE '%$cari%' OR
                jurusan LIKE '%$cari%'
                ";
// pagination
// konfigurasi
$jumlahDataPerHalaman = 2;
$jumlahData = count(query($query));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$halamanAktif = (isset($_GET['halaman'])) ? $_GET['halaman'] : 1;
$awalData = ($jumlahDataPerHalaman*$halamanAktif) - $jumlahDataPerHalaman;
$mahasiswa = query($query . " LIMIT $awalData,$jumlahDataPerHalaman");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>

<a href="logout.php">Logout</a>

<h1>Daftar Mahasiswa</h1>

<a href="tambah.php">Tambah data mahasiswa</a>

<br><br>

<form action="" method="post">

    <input type="search" name="keyword" size="40" autofocus placeholder="masukkan keyword pencarian.." autocomplete="off" value="<?= $cari; ?>" id="search">
    <button type="submit" name="cari">Cari!!</button>
</form>
<script>
const searchInput = document.getElementById('search');

searchInput.addEventListener('search', function() {
    // event 'search' ke-trigger saat klik tombol ❌
    if (this.value === '') {
        window.location.href = 'index.php?reset=true';
    }
});
</script>
<br>
<!-- navigasi -->


<?php if($halamanAktif>1) : ?>
    <a href="?halaman=<?= $halamanAktif-1 ?>">&laquo</a>
<?php endif; ?>

<?php for($i = 1; $i<= $jumlahHalaman; $i++) : ?>
    <?php if($i==$halamanAktif) : ?>
        <a href="?halaman=<?= $i; ?>" style="font-weight: bold; color: red"><?= $i; ?></a>
    <?php else : ?>
        <a href="?halaman=<?= $i; ?>"><?= $i; ?></a>
    <?php endif; ?>
<?php endfor; ?>

<?php if($halamanAktif<$jumlahHalaman) : ?>
    <a href="?halaman=<?= $halamanAktif+1 ?>">&raquo</a>
<?php endif; ?>

<br>
<table border="1" cellpadding='10' cellspacing = '0'>
    <tr>
        <th>No. Urut</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th>
    </tr>
    <?php $i=1; ?> 
    <?php foreach($mahasiswa as $row) : ?>
    <tr align="center">
        <td><?= $i ?></td>
        <td>
            <a href="ubah.php?id=<?= $row['id']; ?>">ubah</a> | 
            <a href="hapus.php?id=<?= $row['id']; ?>" onclick="return confirm('yakin?')">hapus</a>
        </td>
        <td><img src="img/<?= $row["gambar"] ?>" alt="" width="100px"></td>
        <td><?= $row["nim"] ?></td>
        <td><?= $row["nama"] ?></td>
        <td><?= $row["email"] ?></td>
        <td><?= $row["jurusan"] ?></td>
    </tr>
    <?php $i++ ?>
    <?php endforeach; ?>
</table>

</body>
</html>