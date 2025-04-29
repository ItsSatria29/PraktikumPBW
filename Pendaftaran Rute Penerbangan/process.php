<?php
session_start();

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

$maskapai = $_POST['maskapai'];
$asal = $_POST['asal'];
$tujuan = $_POST['tujuan'];
$harga = (int)$_POST['harga'];

$pajak = $bandara_asal[$asal] + $bandara_tujuan[$tujuan];
$total = $harga + $pajak;

$_SESSION['data'] = [
    'maskapai' => $maskapai,
    'asal' => $asal,
    'tujuan' => $tujuan,
    'harga_tiket' => $harga,
    'pajak' => $pajak,
    'total' => $total
];

header("Location: result.php");
exit();
?>
