<?php
require 'koneksi.php';
require 'method.php';

header('Content-Type: application/json');

$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
    case 'GET':
        if (isset($_GET['id'])) {
            $id = intval($_GET['id']);
            echo json_encode(ambilLaporanById($conn, $id));
        } else {
            echo json_encode(ambilSemuaLaporan($conn));
        }
        break;

    case 'POST':
        $input = json_decode(file_get_contents('php://input'), true);
        if (tambahLaporan($conn, $input)) {
            echo json_encode(["status" => "success", "message" => "Laporan berhasil ditambahkan"]);
        } else {
            echo json_encode(["status" => "error", "message" => "Gagal menambah laporan"]);
        }
        break;

    case 'PUT':
        $input = json_decode(file_get_contents('php://input'), true);
        if (ubahStatus($conn, $input)) {
            echo json_encode(["status" => "success", "message" => "Status berhasil diubah"]);
        } else {
            echo json_encode(["status" => "error", "message" => "Gagal mengubah status"]);
        }
        break;

    case 'DELETE':
        if (isset($_GET['id'])) {
            $id = intval($_GET['id']);
            if (hapusLaporan($conn, $id)) {
                echo json_encode(["status" => "success", "message" => "Laporan berhasil dihapus"]);
            } else {
                echo json_encode(["status" => "error", "message" => "Gagal menghapus laporan"]);
            }
        }
        break;

    default:
        echo json_encode(["status" => "error", "message" => "Metode tidak dikenali"]);
}
