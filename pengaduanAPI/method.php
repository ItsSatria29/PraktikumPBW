<?php
function ambilSemuaLaporan($conn) {
    $sql = "SELECT * FROM laporan";
    $res = mysqli_query($conn, $sql);
    $data = [];
    while ($row = mysqli_fetch_assoc($res)) {
        $data[] = $row;
    }
    return $data;
}

function ambilLaporanById($conn, $id) {
    $sql = "SELECT * FROM laporan WHERE id = $id";
    $res = mysqli_query($conn, $sql);
    return mysqli_fetch_assoc($res);
}

function tambahLaporan($conn, $data) {
    $nama  = htmlspecialchars($data['nama']);
    $judul = htmlspecialchars($data['judul']);
    $isi   = htmlspecialchars($data['isi']);

    $sql = "INSERT INTO laporan (nama, judul_laporan, isi_laporan, status)
            VALUES ('$nama', '$judul', '$isi', 'Belum Diproses')";
    return mysqli_query($conn, $sql);
}

function ubahStatus($conn, $data) {
    $id = (int)$data['id'];
    $status = htmlspecialchars($data['status']);
    $sql = "UPDATE laporan SET status='$status' WHERE id=$id";
    return mysqli_query($conn, $sql);
}

function hapusLaporan($conn, $id) {
    $sql = "DELETE FROM laporan WHERE id=$id";
    return mysqli_query($conn, $sql);
}
