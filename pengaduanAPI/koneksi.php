<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "pengaduan";

$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
    die(json_encode([
        "status" => "error",
        "message" => "Koneksi ke database gagal: " . mysqli_connect_error()
    ]));
}
