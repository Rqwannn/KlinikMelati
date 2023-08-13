<?php

include "../Koneksi.php";

$Keahlian = $_GET["Keahlian"];

$query = mysqli_query($conn, "SELECT * FROM dokter");

$result = [];

foreach ($query as $item) {
    if ($item["keahlian"] == $Keahlian) {
        $result[] = [
            "nama" => $item["nama"],
            "umur" => $item["umur"],
            "keahlian" => $item["keahlian"],
            "gambar" => base64_encode($item["gambar"]),
        ];
    }
}

echo json_encode($result);
