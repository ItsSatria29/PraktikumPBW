<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $kode = $_POST['kodemk'];
    $nama = $_POST['nama'];
    $sks = $_POST['jumlah_sks'];
    $stmt = $pdo->prepare("INSERT INTO matakuliah (kodemk, nama, jumlah_sks) VALUES (?, ?, ?)");
    $stmt->execute([$kode, $nama, $sks]);
    header("Location: matakuliah.php");
}

$matakuliah = $pdo->query("SELECT * FROM matakuliah")->fetchAll();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Mata Kuliah</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h2>Data Mata Kuliah</h2>
    <form method="post" class="form">
        <input type="text" name="kodemk" placeholder="Kode MK" required>
        <input type="text" name="nama" placeholder="Nama Mata Kuliah" required>
        <input type="number" name="jumlah_sks" placeholder="SKS" required>
        <button type="submit">Simpan</button>
    </form>
    <table>
        <thead>
        <tr><th>No</th><th>Kode</th><th>Nama</th><th>SKS</th></tr>
        </thead>
        <tbody>
        <?php foreach ($matakuliah as $i => $mk): ?>
            <tr>
                <td><?= $i+1 ?></td>
                <td><?= $mk['kodemk'] ?></td>
                <td><?= $mk['nama'] ?></td>
                <td><?= $mk['jumlah_sks'] ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <a href="index.php">&larr; Kembali ke menu</a>
</div>
</body>
</html>
