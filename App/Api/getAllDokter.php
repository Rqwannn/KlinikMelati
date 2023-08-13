<?php

include "../Koneksi.php";

$query = mysqli_query($conn, "SELECT * FROM dokter");

$result = [];

while ($row = mysqli_fetch_assoc($query)) {
    $result[] = [
        "nama" => $row["nama"],
        "umur" => $row["umur"],
        "keahlian" => $row["keahlian"],
        "gambar" => base64_encode($row["gambar"]),
    ];
}

echo json_encode($result);
