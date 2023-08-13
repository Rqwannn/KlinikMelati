<?php

include "../Koneksi.php";

$obat = $_GET["obat"];

$query = mysqli_query($conn, "SELECT * FROM obat WHERE nama_obat LIKE '%$obat%'");

$result = [];

foreach ($query as $item) {
    $result[] = [
        "id_obat" => $item["id_obat"],
        "nama_obat" => $item["nama_obat"],
        "nama_penyakit" => $item["nama_penyakit"],
        "jenis_obat" => $item["jenis_obat"],
        "harga_obat" => $item["harga_obat"],
        "deskripsi" => $item["deskripsi"],
        "gambar_obat" => base64_encode($item["gambar_obat"]),
    ];
}

echo json_encode($result);