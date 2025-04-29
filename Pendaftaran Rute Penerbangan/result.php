<?php
session_start();
if (!isset($_SESSION['data'])) {
    header("Location: index.php");
    exit();
}
$data = $_SESSION['data'];
unset($_SESSION['data']);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Detail Penerbangan</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
    <h2>Detail Tiket Anda</h2>

    <div class="info">✈️ Maskapai: <span class="highlight"><?= $data['maskapai'] ?></span></div>
    <div class="info">🛫 Bandara Asal: <span class="highlight"><?= $data['asal'] ?></span></div>
    <div class="info">🛬 Bandara Tujuan: <span class="highlight"><?= $data['tujuan'] ?></span></div>
    <div class="info">🎟️ Harga Tiket: <span class="highlight">Rp <?= number_format($data['harga_tiket'], 0, ',', '.') ?></span></div>
    <div class="info">💸 Pajak: <span class="highlight">Rp <?= number_format($data['pajak'], 0, ',', '.') ?></span></div>
    <div class="info">💼 Total Bayar: <span class="highlight">Rp <?= number_format($data['total'], 0, ',', '.') ?></span></div>

    <a href="index.php" class="kembali">← Kembali ke Formulir</a>
</div>
</body>
</html>
