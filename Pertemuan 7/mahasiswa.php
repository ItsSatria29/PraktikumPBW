<?php
include 'koneksi.php';

// Tambah data
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $stmt = $pdo->prepare("INSERT INTO mahasiswa (npm, nama, jurusan) VALUES (?, ?, ?)");
    $stmt->execute([$npm, $nama, $jurusan]);
    header("Location: mahasiswa.php");
}

// Ambil data
$mahasiswa = $pdo->query("SELECT * FROM mahasiswa")->fetchAll();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h2>Data Mahasiswa</h2>
    <form method="post" class="form">
        <input type="text" name="npm" placeholder="NPM" required>
        <input type="text" name="nama" placeholder="Nama" required>
        <input type="text" name="jurusan" placeholder="Jurusan" required>
        <button type="submit">Simpan</button>
    </form>
    <table>
        <thead>
        <tr><th>No</th><th>NPM</th><th>Nama</th><th>Jurusan</th></tr>
        </thead>
        <tbody>
        <?php foreach ($mahasiswa as $i => $m): ?>
            <tr>
                <td><?= $i+1 ?></td>
                <td><?= $m['npm'] ?></td>
                <td><?= $m['nama'] ?></td>
                <td><?= $m['jurusan'] ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <a href="index.php">&larr; Kembali ke menu</a>
</div>
</body>
</html>
