<?php
require 'functions.php';

// Ambil id dari URL
$id = $_GET['id'];

// Query mahasiswa berdasarkan id
$m = query("SELECT * FROM mahasiswa WHERE id = $id");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>

<body>
    <h3>Detail Mahasiswa</h3>
    <ul>
        <li><img src="img/<?= $m['gambar']; ?>"></li>
        <li>NIM: <?= $m['nim']; ?></li>
        <li>Nama: <?= $m['nama']; ?></li>
        <li>Email: <?= $m['email']; ?></li>
        <li>Jurusan: <?= $m['jurusan']; ?></li>
        <li><a href="">ubah</a> | <a href="">hapus</a></li>
    </ul>
    <a href="latihan3.php">Kembali ke Daftar Mahasiswa</a>
</body>

</html>