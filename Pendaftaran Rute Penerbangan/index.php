<?php
$bandara_asal = [
    "Soekarno Hatta" => 65000,
    "Husein Sastranegara" => 50000,
    "Abdul Rachman Saleh" => 40000,
    "Juanda" => 30000
];

$bandara_tujuan = [
    "Ngurah Rai" => 85000,
    "Hasanuddin" => 70000,
    "Inanwatan" => 90000,
    "Sultan Iskandar Muda" => 60000
];

asort($bandara_asal);
asort($bandara_tujuan);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Input Rute Penerbangan</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
    <h2>Formulir Pendaftaran Rute</h2>
    <form action="process.php" method="POST">
        <label>Nama Maskapai</label>
        <input type="text" name="maskapai" required>

        <label>Pilih Bandara Asal</label>
        <select name="asal" required>
            <?php foreach ($bandara_asal as $nama => $pajak): ?>
                <option value="<?= $nama ?>"><?= $nama ?></option>
            <?php endforeach; ?>
        </select>

        <label>Pilih Bandara Tujuan</label>
        <select name="tujuan" required>
            <?php foreach ($bandara_tujuan as $nama => $pajak): ?>
                <option value="<?= $nama ?>"><?= $nama ?></option>
            <?php endforeach; ?>
        </select>

        <label>Harga Tiket</label>
        <input type="number" name="harga" required>

        <input type="submit" value="Hitung Total Harga">
    </form>
</div>
</body>
</html>
