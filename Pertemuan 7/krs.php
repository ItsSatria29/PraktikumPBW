<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_mahasiswa = $_POST['mahasiswa_npm'];
    $id_matakuliah = $_POST['matakuliah'];
    $stmt = $pdo->prepare("INSERT INTO krs (mahasiswa_npm, matakuliah_kodemk) VALUES (?, ?)");
    $stmt->execute([$id_mahasiswa, $id_matakuliah]);
    header("Location: krs.php");
}

$krs = $pdo->query("SELECT krs.id, m.nama AS mahasiswa, mk.nama AS matakuliah, mk.jumlah_sks AS sks FROM krs
JOIN mahasiswa m ON krs.mahasiswa_npm = m.npm
JOIN matakuliah mk ON krs.matakuliah_kodemk = mk.kodemk")
    ->fetchAll();
$mahasiswa = $pdo->query("SELECT * FROM mahasiswa")->fetchAll();
$matakuliah = $pdo->query("SELECT * FROM matakuliah")->fetchAll();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data KRS</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h2>Data KRS</h2>
    <form method="post" class="form">
        <select name="mahasiswa_npm" required>
            <option value="">-- Pilih Mahasiswa --</option>
            <?php foreach ($mahasiswa as $m): ?>
                <option value="<?= $m['npm'] ?>"><?= $m['nama'] ?></option>
            <?php endforeach; ?>
        </select>
        <select name="matakuliah" required>
            <option value="">-- Pilih Mata Kuliah --</option>
            <?php foreach ($matakuliah as $mk): ?>
                <option value="<?= $mk['kodemk'] ?>"><?= $mk['nama'] ?> (<?= $mk['jumlah_sks'] ?> SKS)</option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Simpan</button>
    </form>

    <table>
        <thead>
        <tr><th>No</th><th>Mahasiswa</th><th>Mata Kuliah</th><th>Keterangan</th></tr>
        </thead>
        <tbody>
        <?php foreach ($krs as $i => $k): ?>
            <tr>
                <td><?= $i+1 ?></td>
                <td><?= $k['mahasiswa'] ?></td>
                <td><?= $k['matakuliah'] ?></td>
                <td><strong><?= $k['mahasiswa'] ?></strong> Mengambil Mata Kuliah <strong><?= $k['matakuliah'] ?></strong> (<?= $k['sks'] ?> SKS)</td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <a href="index.php">&larr; Kembali ke menu</a>
</div>
</body>
</html>
